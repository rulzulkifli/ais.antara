<?php

class Keuangan extends Controller {
	//-------------LISTING---------------//
    public function daftar_jurnal_umum()
	{
		$data['title'] = 'AIS 2.0 LKBN ANTARA | Daftar Jurnal Umum';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
        $this->view('templates/topnavbar', $data);
		$this->view('keuangan/daftar_jurnal_umum', $data);
		$this->view('templates/footer');
	}

	public function daftar_jurnal_penyesuaian()
	{
		$data['title'] = 'AIS 2.0 LKBN ANTARA | Daftar Jurnal Penyesuaian';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
        $this->view('templates/topnavbar', $data);
		$this->view('keuangan/daftar_jurnal_penyesuaian', $data);
		$this->view('templates/footer');
	}

	public function daftar_jurnal_eliminasi()
	{
		$data['title'] = 'AIS 2.0 LKBN ANTARA | Daftar Jurnal Eliminasi';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
        $this->view('templates/topnavbar', $data);
		$this->view('keuangan/daftar_jurnal_eliminasi', $data);
		$this->view('templates/footer');
	}

	public function daftar_jurnal_konsolidasi()
	{
		$data['title'] = 'AIS 2.0 LKBN ANTARA | Daftar Jurnal Konsolidasi';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
        $this->view('templates/topnavbar', $data);
		$this->view('keuangan/daftar_jurnal_konsolidasi', $data);
		$this->view('templates/footer');
	}
	//----------Transaksi------------//

	public function tambah_jurnal_umum()
	{
		$data['title'] = 'AIS 2.0 LKBN ANTARA | Tambah Jurnal Umum';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
        $this->view('templates/topnavbar', $data);
		$this->view('keuangan/tambah_jurnal_umum', $data);
		$this->view('templates/footer');
	}

	//----------Data Access----------//
	public function da_get_data_jurnal_umum()
	{
		$data = $this->model("GLModel")->getDataJurnal($_POST);
		$jumlah_data = $this->model("GLModel")->getJumlahJurnal($_POST);
		echo json_encode(array("recordsTotal"=>$jumlah_data, "recordsFiltered"=>$jumlah_data, "data" => $data ));
	}
}