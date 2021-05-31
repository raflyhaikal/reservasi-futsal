<?php
class Login_model extends CI_Model
{

    function auth_admin($username, $password)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password=('$password') LIMIT 1");
        return $query;
    }

    function auth_pelanggan($username, $password)
    {
        $query = $this->db->query("SELECT * FROM pelanggan WHERE username='$username' AND password=('$password') LIMIT 1");
        return $query;
    }

    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}