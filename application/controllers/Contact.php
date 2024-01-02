<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index(){
		$data['title'] = 'Kontak Kami';
		$data['halaman'] = $this->db->get('halaman')->result_array();

		$this->load->view('template/header');
		$this->load->view('template/topbar', $data);
		$this->load->view('hubungi/contact');
		$this->load->view('template/footer');
	}
}

?>