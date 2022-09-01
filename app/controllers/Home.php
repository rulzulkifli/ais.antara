<?php

class Home extends Controller {
	public function __construct()
	{	
		/*if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}*/
	} 
	public function index()
	{
		$data['title'] = 'AIS 2.0 LKBN ANTARA | Beranda';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
        $this->view('templates/topnavbar', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}