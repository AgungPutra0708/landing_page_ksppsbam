<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
	public function index(){
		$data['title'] = 'Konten';
		$data['halaman'] = $this->db->get('halaman')->result_array();

		$this->load->view('template/header');
		$this->load->view('template/topbar', $data);
		$this->load->view('page/content.php');
		$this->load->view('template/footer');
	}
}

?>