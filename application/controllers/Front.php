<?php 
class Front extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mtransaksi', 'mtransaksi');
        $this->load->helper(array('form', 'url'));
               
    }

    public function index()
    {
        $data ='';
        
        $this->load->view("template/front/header",$data); 
        $this->load->view("front/index",$data); 
        $this->load->view("template/front/footer");
    }


    public function list_lapangan()
    {
        $data ='';
        
        $this->load->view("template/front/header",$data); 
        $this->load->view("front/list_lapangan",$data); 
        $this->load->view("template/front/footer");
    }

    public function booking()
    {
        $user = $this->session->userdata('ses_id');
        $data['lapangan'] = $this->db->get('lapangan')->result_array();
        
        if(!isset($user)) redirect('authfront');

        $this->load->view("template/front/header",$data); 
        $this->load->view("front/booking",$data); 
        $this->load->view("template/front/footer");
    }

    public function tambah_booking() 
    {
       
        $id_l = $this->input->post('id_lapangan');
        if($id_l) $lapangan = $this->db->get_where('lapangan', ['id_lapangan' => $id_l ])->row_array();
        
        $data =[
        'tanggal' => $this->input->post('tanggal'),
        'id_pelanggan' => $this->input->post('id_pelanggan'),
        'id_lapangan' => $this->input->post('id_lapangan'),
        'jam' => $this->input->post('jam'),
        'waktu' => $this->input->post('waktu'),
        'total' => $this->input->post('waktu') * $lapangan['harga'],
        'status' => 'Belum Konfirmasi',
    ];

    $insert = $this->db->insert('transaksi', $data);  
    if($insert) $this->session->set_flashdata('message',  '<div class="alert alert-success" align="center" role="alert">Booking Berhasil</div>');
    
    redirect('front/booking','refresh');
    
    
    }
    

    public function detail_lapangan()
    {
        // $this->db->group_by('tanggal');
        $this->db->distinct('tanggal');
        $data['lapangan'] = $this->db->get('transaksi')->result_array();

        foreach ($data['lapangan'] as $key => $value) {
            $w=explode(":",$value['jam']);
            $q = $w[0];
            $durasi = $value['waktu'] + $q;
            $data['lapangan'][$key]['jadwal'] = [];
            for ($i=$w[0]; $i < $durasi ; $i++) {
                $data['lapangan'][$key]['jadwal'][] = $i ;
            }
            
        }
        $this->load->view("template/front/header",$data); 
        $this->load->view("front/detail_lapangan",$data); 
        $this->load->view("template/front/footer");
    }

    public function about()
    {
        $data ='';
        
        $this->load->view("template/front/header",$data); 
        $this->load->view("front/about",$data); 
        $this->load->view("template/front/footer");
    }
    
    public function profile()   //view menu profile pelanggan
    {
        $id_user = $this->session->userdata('idusr');
        $data['pelanggan'] =$this->db->get_where('pelanggan',['id_pelanggan' => $id_user])->row_array();
        $id=$this->input->get('id');
        //join lapangan
        $this->db->join('lapangan', 'transaksi.id_lapangan = lapangan.id_lapangan', 'left');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->join('konfirmasi', ' transaksi.id_transaksi = konfirmasi.id_transaksi', 'left');
        $data['transaksi'] = $this->db->get('transaksi')->result_array();

        $pelanggan=$this->db->get('pelanggan',array('id_pelanggan'=>$id_user))->row_array();

        if($id_user){
            $data['transaksi']=$this->mtransaksi->show_transaksi($id_user)->result_array();
          
        }
        // print_r($data['transaksi']);
        // exit();
        $this->load->view("template/front/header",$data); 
        $this->load->view("front/profile",$data); 
        $this->load->view("template/front/footer");

    }

    public function aksi_upload()
    {
		$config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';	
        $config['max_size'] 			= 3000;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
 
		$this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
			return $error = array('error' => $this->upload->display_errors());
		}else{
            return array('upload_data' => $this->upload->data());
        }
    }
    
    public function konfirmasi_profile()
    {
        $this->form_validation->set_rules('id_transaksi', 'Id_transaksi' , 'required');
        if ($this->form_validation->run() == false) {
            redirect('front/profile');
        } else {
            $data = array(
                'id_transaksi' => $this->input->post('id_transaksi'), // sql input ke Database
                'nominal' => $this->input->post('nominal'), // sql input ke Database
                'catatan' => $this->input->post('catatan')
            );
            
            if  (!empty($_FILES['foto']['name'])) {
                $upload = $this->aksi_upload();
                $data['foto'] = $upload['upload_data']['file_name'];
            }

            $this->db->insert('konfirmasi', $data);
            $this->session->set_flashdata('message',  '<div class="alert alert-success" align="center" role="alert">Konfirmasi Berhasil</div>');
    
            redirect('front/profile');
        }
    }

}