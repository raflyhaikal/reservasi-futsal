<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Lapangan_model extends CI_Model{
 
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
 public function get_kategory ()
    {
        $this->db->select('
            produk.*, kategori.id_kategori AS id_kategori, kategori.nama_kategori
        ');
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori');
        $this->db->from('produk');
       
        $query = $this->db->get();
        return $query->result_array();
    }
  