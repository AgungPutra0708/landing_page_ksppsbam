<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rembug extends CI_Model {
   //ambil data mahasiswa dari database
    function get_rembug_list($limit, $start){
        $query = $this->db->get('t_rempug', $limit, $start);
        return $query;
    }
}