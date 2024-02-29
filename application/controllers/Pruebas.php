<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pruebas extends CI_Controller {

	public function prueba()
	{

		$this->load->view('admin/layouts/dash_header');
		$this->load->view('admin/layouts/pruebas_lay');
		$this->load->view('admin/layouts/dash_footer');

	}
}
