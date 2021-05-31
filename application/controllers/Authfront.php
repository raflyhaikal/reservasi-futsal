<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authfront extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Login';
        $this->load->view('template/auth/auth_header', $data);
        $this->load->view('auth/loginfront');
        $this->load->view('template/auth/auth_footer');
    }
    
    public function login()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = md5($this->input->post('password'));
        
        $cek_user = $this->login_model->auth_pelanggan($username, $password);

        if ($cek_user->num_rows() > 0) {
            $data = $cek_user->row_array();
            $this->session->set_userdata('masuk', TRUE);
            $this->session->set_userdata('akses', '1');
            $this->session->set_userdata('idusr', $data['id_pelanggan']);
            $this->session->set_userdata('ses_id', $data['username']);
            $this->session->set_userdata('ses_nama', $data['nama']);
            redirect('front');
        } else {  // jika username dan password tidak ditemukan atau salah
            $url = base_url('authfront/');
            echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
            redirect($url);
        }
    }
        
    public function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('front/');
        redirect($url);
    }





    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pelanggan.username]', [
            'is_unique' => 'Username ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pelanggan.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', [
            'min_length' => 'Password terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $this->load->view('template/auth/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('template/auth/auth_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama_pelanggan' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'password' => md5($this->input->post('password'))
            ];

            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Thank for Registering!</div>');
            redirect('authfront');
        }
    }
}
