<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index(){
		$data['title'] = 'Beranda';
		$data['halaman'] = $this->db->get('halaman')->result_array();
		$data['anggota'] = $this->db->get_where('grafik', ['deskripsi' => 'anggota'])->result_array();
		$data['piutang'] = $this->db->get_where('grafik', ['deskripsi' => 'piutang'])->result_array();
		$data['banner'] = $this->db->get('banner')->result_array();
		$data['mitra'] = $this->db->get('mitra_kerja')->result_array();


		$this->load->view('template/header');
		$this->load->view('template/topbar', $data);
		$this->load->view('beranda/home', $data);
		$this->load->view('template/footer');
	}
}

?>