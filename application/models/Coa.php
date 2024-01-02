<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coa extends CI_Model {
   //ambil data mahasiswa dari database
    function get_coa_list($limit, $start){
        $query = $this->db->get('t_ccoa', $limit, $start);
        return $query;
    }
}