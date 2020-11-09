<?php

class Home extends Controller {

	public function index()
	{
		$data['judul'] = 'Home';
		$data['artikel'] = $this->model('Artikel_model')->getArtikel();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}


}