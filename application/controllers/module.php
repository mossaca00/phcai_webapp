<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module extends CI_Controller {

	public function index()
	{
		$this->home();
	}
	public function home() {
		$this->load->view('view_home');
	}

	public function regionI() {
		$this->load->view('destinations/region1/view_region1');
	}
}