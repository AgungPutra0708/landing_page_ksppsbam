<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function index(){
		$data['title'] = 'Tentang Kami';
		$data['halaman'] = $this->db->get('halaman')->result_array();

		$this->load->view('template/header');
		$this->load->view('template/topbar', $data);
		$this->load->view('tentang/tentang-kami');
		$this->load->view('template/footer');
	}
}

?>