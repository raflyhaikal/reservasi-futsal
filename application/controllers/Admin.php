<?php 
class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    function get_enum($table = '', $field = '')
    {
        $enums = array();
        if ($table == '' || $field == '') return $enums;
        $CI =& get_instance();
        preg_match_all("/'(.*?)'/", $CI->db->query("SHOW COLUMNS FROM {$table} LIKE '{$field}'")->row()->Type, $matches);
        foreach ($matches[1] as $key => $value) {
            $enums[$value] = $value; 
        }
        return $enums;
    }
    
    public function index()
    {   
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view("template/backend/header",$data);
        $this->load->view("template/backend/topbar",$data);
        $this->load->view("template/backend/sidebar");
        $this->load->view("backend/index");
        $this->load->view("template/backend/footer");
    }

    public function lapangan()
    {

        $data['lapangan'] = $this->db->get('lapangan')->result_array();
        $this->load->view("template/backend/header");
        $this->load->view("template/backend/topbar",$data);
        $this->load->view("template/backend/sidebar");
        $this->load->view("backend/lapangan",$data);
        $this->load->view("template/backend/footer");

    }
    public function editlapangan()
    {
        $this->form_validation->set_rules('id_lapangan', 'Id_lapangan', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Gagal Di Edit</div>');
            redirect('Admin/lapangan');
        } else {
            $id = $this->input->post('id_lapangan');
            $data = [
                'nama_lapangan' => $this->input->post('nama_lapangan'),
                'harga' => $this->input->post('harga'),
                'foto' => $this->input->post('foto'),
            ];
            $this->db->where('id_lapangan', $id);
            $this->db->update('lapangan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Berhasil Di Edit</div>');
            redirect('Admin/lapangan');
        }
    }
    public function hapuslapangan($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', "Lapangan Gagal Di Hapus");
            redirect('Admin/lapangan');
        } else {
            $this->db->where('id_lapangan', $id);
            $this->db->delete('lapangan');
            $this->session->set_flashdata('message', "Lapangan Berhasil Dihapus");
            redirect('Admin/lapangan');
        }
    }
    
    public function jadwal()
    {
        $this->db->select('lapangan.nama_lapangan, transaksi.tanggal, transaksi.jam ,transaksi.waktu, jadwal.*');
        $this->db->join('lapangan', ' jadwal.id_lapangan = lapangan.id_lapangan', 'left');
        $this->db->join('transaksi', ' jadwal.id_transaksi = transaksi.id_transaksi', 'left');

        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $this->load->view("template/backend/header");
        $this->load->view("template/backend/topbar",$data);
        $this->load->view("template/backend/sidebar");
        $this->load->view("backend/jadwal",$data);
        $this->load->view("template/backend/footer");
    }

    public function editjadwal()
    {
        $this->form_validation->set_rules('id_jadwal', 'Id_jadwal', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Gagal Di Edit</div>');
            redirect('Admin/jadwal');
        } else {
            $id = $this->input->post('id_jadwal');
            $data = [
                'nama_lapangan' => $this->input->post('nama_lapangan'),
                'tanggal' => $this->input->post('tanggal'),
                'jam' => $this->input->post('jam'),
            ];
            $this->db->where('id_jadwal', $id);
            $this->db->update('jadwal', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Berhasil Di Edit</div>');
            redirect('Admin/jadwal');
        }
    }
    public function hapusjadwal($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', "Jadwal Gagal Di Hapus");
            redirect('Admin/jadwal');
        } else {
            $this->db->where('id_jadwal', $id);
            $this->db->delete('jadwal');
            $this->session->set_flashdata('message', "Jadwal Berhasil Dihapus");
            redirect('Admin/jadwal');
        }
    }

    public function pelanggan()
    {

        $data['pelanggan'] = $this->db->get('pelanggan')->result_array();
        $this->load->view("template/backend/header");
        $this->load->view("template/backend/topbar",$data);
        $this->load->view("template/backend/sidebar");
        $this->load->view("backend/pelanggan",$data);
        $this->load->view("template/backend/footer");
    }

    public function editpelanggan()
    {
        $this->form_validation->set_rules('id_pelanggan', 'Id_pelanggan', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Gagal Di Edit</div>');
            redirect('Admin/pelanggan');
        } else {
            $id = $this->input->post('id_pelanggan');
            $data = [
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'email' => $this->input->post('email'),
                'no_telepon' => $this->input->post('no_telepon'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            ];
            $this->db->where('id_pelanggan', $id);
            $this->db->update('pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Berhasil Di Edit</div>');
            redirect('Admin/pelanggan');
        }
    }
    public function hapuspelanggan($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', "Pelanggan Gagal Di Hapus");
            redirect('Admin/pelanggan');
        } else {
            $this->db->where('id_pelanggan', $id);
            $this->db->delete('pelanggan');
            $this->session->set_flashdata('message', "Pelanggan Berhasil Dihapus");
            redirect('Admin/pelanggan');
        }
    }

    public function transaksi()
    {
        $this->db->select('lapangan.nama_lapangan, pelanggan.nama_pelanggan, pelanggan.no_telepon, transaksi.*, konfirmasi.*, konfirmasi.id_transaksi as transaksi');
        $this->db->join('lapangan', ' transaksi.id_lapangan = lapangan.id_lapangan', 'left');
        $this->db->join('pelanggan', ' transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->join('konfirmasi', ' transaksi.id_transaksi = konfirmasi.id_transaksi', 'left');
        $data['transaksi'] = $this->db->get('transaksi')->result_array();
        $data['status'] = $this->get_enum('transaksi','status');
        // $data['transaksi'] = $this->db->get_where('transaksi',['konfirmasi.id_transaksi' => null])->result_array();
        $this->load->view("template/backend/header");
        $this->load->view("template/backend/topbar",$data);
        $this->load->view("template/backend/sidebar");
        $this->load->view("backend/transaksi",$data);
        $this->load->view("template/backend/footer");
    }

    public function edittransaksi()
    {
        $this->form_validation->set_rules('id_transaksi', 'Id_transaksi', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Gagal Di Edit</div>');
            redirect('Admin/transaksi');
        } else {
            $id = $this->input->post('id_transaksi');
            $data = [
                'tanggal' => $this->input->post('tanggal'),
                'jam' => $this->input->post('jam'),
                'waktu' => $this->input->post('waktu'),
                'total' => $this->input->post('total'),
                'status' => $this->input->post('status'),
            ];
            $this->db->where('id_transaksi', $id);
            $this->db->update('transaksi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Berhasil Di Edit</div>');
            redirect('Admin/transaksi');
        }
    }
    public function hapustransaksi($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', "Transaksi Gagal Di Hapus");
            redirect('Admin/transaksi');
        } else {
            $this->db->where('id_transaksi', $id);
            $this->db->delete('transaksi');
            $this->session->set_flashdata('message', "Transaksi Berhasil Dihapus");
            redirect('Admin/transaksi');
        }
    }
    public function konfirmasitransaksi()
    {
        $this->form_validation->set_rules('id_transaksi', 'Id_transaksi', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Gagal Di Edit</div>');
            redirect('Admin/transaksi');
        } else {
            $id = $this->input->post('id_transaksi');
            $id_k = $this->input->post('id_konfirmasi');
            $data = [
                'status' => $this->input->post('status'),
            ];
            $konfirmasi = [
                'id_transaksi' => $this->input->post('id_transaksi'),
                'nominal' => $this->input->post('nominal'),
                'catatan' => $this->input->post('catatan'),
            ];
            if  (!empty($_FILES['foto']['name'])) {
                $upload = $this->aksi_upload();
                $konfirmasi['foto'] = $upload['upload_data']['file_name'];
            }
            $this->db->where('id_transaksi', $id);
            $this->db->update('transaksi', $data);
            if (!$id_k) {
            $this->db->insert('konfirmasi', $konfirmasi);
            }else{
            $this->db->where('id_konfirmasi', $id_k);
            $this->db->update('konfirmasi', $konfirmasi);
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Berhasil Di Edit</div>');
            redirect('Admin/transaksi');
        }
    }

    public function konfirmasi()
    {
        $this->db->select('transaksi.tanggal, transaksi.jam, transaksi.waktu, transaksi.total, transaksi.status, konfirmasi.*');
        $this->db->join('transaksi', ' konfirmasi.id_transaksi = transaksi.id_transaksi', 'left');
        $data['status'] = $this->get_enum('transaksi','status');
        $this->db->or_where('transaksi.status <>', 'Belum Konfirmasi');
        $data['konfirmasi'] = $this->db->get_where('konfirmasi',['transaksi.status <>' => 'Lunas'])->result_array();
        $this->load->view("template/backend/header");
        $this->load->view("template/backend/topbar",$data);
        $this->load->view("template/backend/sidebar");
        $this->load->view("backend/konfirmasi",$data);
        $this->load->view("template/backend/footer");
    }
    public function hapuskonfirmasi($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('message', "Konfirmasi Gagal Di Hapus");
            redirect('Admin/konfirmasi');
        } else {
            $this->db->where('id_konfirmasi', $id);
            $this->db->delete('konfirmasi');
            $this->session->set_flashdata('message', "Konfirmasi Berhasil Dihapus");
            redirect('Admin/konfirmasi');
        }
    }
    public function selesaikonfirmasi()
    {
        $this->form_validation->set_rules('id_transaksi', 'Id_transaksi', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Gagal Di Edit</div>');
            redirect('Admin/konfirmasi');
        } else {
            $id = $this->input->post('id_transaksi');
            $idkonfirmasi = $this->input->post('id_konfirmasi');
            $pesanan = $this->db->get_where('transaksi',['id_transaksi' => $id])->row_array();
            $data = [
                'status' => $this->input->post('status'),
            ];

            if ($pesanan['total'] == $this->input->post('nominal')) {
                $data['status']= "Lunas";
            }

            $konfirmasi = [
                'id_transaksi' => $this->input->post('id_transaksi'),
                'nominal' => $this->input->post('nominal'),
                'catatan' => $this->input->post('catatan'),
            ];

            if ($pesanan['total'] < $this->input->post('nominal')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Nominal Pembayaran Melebihi Tagihan, Harap isi dengan BIJAK !</div>');
                redirect('Admin/konfirmasi');
            }

            $this->db->where('id_transaksi', $id);
            $this->db->update('transaksi', $data);
            $this->db->where('id_konfirmasi', $idkonfirmasi);
            $this->db->update('konfirmasi', $konfirmasi);
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Data Berhasil Di Edit</div>');
            redirect('Admin/konfirmasi');
        }
    }
    
    public function selesai_pemesanan()
    {
    $id = $this->input->get('id');
    $data = [
        'status' => 'Lunas'
    ];
    $this->db->where('id_transaksi', $id);
    $this->db->update('transaksi',$data);
    redirect('Admin/selesai');
    }

    public function selesai()
    {
        $this->db->select('transaksi.tanggal, transaksi.jam, transaksi.waktu, transaksi.total, transaksi.status, konfirmasi.*');
        $this->db->join('konfirmasi', ' konfirmasi.id_transaksi = transaksi.id_transaksi', 'left');
        $data['status'] = $this->get_enum('transaksi','status');
        $data['konfirmasi'] = $this->db->get_where('transaksi',['transaksi.status' => 'Lunas'])->result_array();
        $this->load->view("template/backend/header");
        $this->load->view("template/backend/topbar",$data);
        $this->load->view("template/backend/sidebar");
        $this->load->view("backend/selesai",$data);
        $this->load->view("template/backend/footer");
    }
}