<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module extends CI_Controller {

	public function index()
	{
		$this->home();
	}
	public function home() {
		$this->load->view('view_home');
	}
	public function lectures() {
		$this->load->view('view_lecture');
	}
	public function login() {
		$this->load->view('system/signin');
	}
	public function regionI() {
		$this->load->view('destinations/region1/historical/view_region');
	}
	public function regionIc() {
		$this->load->view('destinations/region1/churches/view_churches');
	}
	public function regionII() {
		$this->load->view('destinations/region2/historical/view_region2');
	}
	public function regionIIc() {
		$this->load->view('destinations/region2/churches/view_churches');
	}
	public function regionIII() {
		$this->load->view('destinations/region3/historical/view_region3');
	}
	public function regionIIIc() {
		$this->load->view('destinations/region3/churches/view_churches');
	}
	public function regionIV() {
		$this->load->view('destinations/region4/historical/view_region4');
	}
	public function regionIVc() {
		$this->load->view('destinations/region4/churches/view_churches');
	}
	public function regionV() {
		$this->load->view('destinations/region5/historical/view_region5');
	}
	public function regionVc() {
		$this->load->view('destinations/region5/churches/view_churches');
	}
}