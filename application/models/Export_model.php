<?php defined('BASEPATH') OR die('No direct script access allowed');

class Export_model extends CI_Model {

     public function getAll()
     {
          $this->db->select('*');
          $this->db->from('t_anggota');
          // $this->db->->join('t_tabungan', 't_anggota.kode_anggota = t_tabungan.kode_anggota');
          $this->db->join('t_rempug', 't_anggota.kode_rempug = t_rempug.kode_rempug');
          $this->db->join('t_cabang', 't_rempug.kode_cabang = t_cabang.id_cabang');
          // $this->db->where("t_rempug.kode_cabang",1);

          return $this->db->get();
     }
     public function data_simpanan()
     {
          $this->db->select('*');
          $this->db->from('t_jenis_simpan');


          return $this->db->get();
     }
     public function data_tabungan()
     {
          $this->db->select('*');
          $this->db->from('t_tabungan');


          return $this->db->get();
     }
     public function data_pinjaman()
     {
          $this->db->select('*');
          $this->db->from('t_pinjam');

          return $this->db->get();
     }
     public function data_setoran()
     {
          $this->db->select('*')
                    ->from("t_detail_setoran")
                    ->join('t_setoran', 't_detail_setoran.id_setoran = t_setoran.id_setoran')
                    ->join('t_anggota', 't_detail_setoran.kode_anggota = t_anggota.kode_anggota')
                    ->join('t_rempug', 't_setoran.kode_rempug = t_rempug.kode_rempug');

          return $this->db->get();
     }
}