<?php

class Mtransaksi extends CI_Model{

    function show_transaksi($id){
            $hasil=$this->db->query("SELECT transaksi.*,pelanggan.*,lapangan.*, pelanggan.id_pelanggan as idpel,lapangan.id_lapangan as id_lap 
            FROM transaksi 
            LEFT JOIN lapangan ON lapangan.id_lapangan = transaksi.id_lapangan 
            LEFT JOIN pelanggan ON pelanggan.id_pelanggan = transaksi.id_pelanggan
            WHERE transaksi.id_pelanggan =".$id);
            return $hasil;

      }    

}