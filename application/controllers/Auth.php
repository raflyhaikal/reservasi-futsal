<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
        $this->load->view('auth/login');
        $this->load->view('template/auth/auth_footer');
    }
    public function login()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $cek_admin = $this->login_model->auth_admin($username, $password);

        if ($cek_admin->num_rows() > 0) { //jika login sebagai admin
            $data = $cek_admin->row_array();
            $this->session->set_userdata('masuk', TRUE);
            $this->session->set_userdata('akses', '1');
            $this->session->set_userdata('ses_id', $data['username']);
            $this->session->set_userdata('ses_nama', $data['nama']);
            redirect('admin');
                } else {  // jika username dan password tidak ditemukan atau salah
                    $url = base_url('auth');
                    echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
                    redirect($url);
                }
            }
        
    public function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('auth');
        redirect($url);
    }
}
