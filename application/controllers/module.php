
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
	public function regionVI() {
		$this->load->view('destinations/region6/historical/view_region6');
	}
	public function regionVIc() {
		$this->load->view('destinations/region6/churches/view_churches');
	}
	public function regionVII() {
		$this->load->view('destinations/region7/historical/view_region7');
	}
	public function regionVIIc() {
		$this->load->view('destinations/region7/churches/view_churches');
	}
	public function regionVIII() {
		$this->load->view('destinations/region8/historical/view_region8');
	}
	public function regionVIIIc() {
		$this->load->view('destinations/region8/churches/view_churches');
	}
	public function regionIX() {
		$this->load->view('destinations/region9/historical/view_region9');
	}
	public function regionIXc() {
		$this->load->view('destinations/region9/churches/view_churches');
	}
	public function regionX() {
		$this->load->view('destinations/region10/historical/view_region10');
	}
	public function regionXc() {
		$this->load->view('destinations/region10/churches/view_churches');
	}
	public function regionXI() {
		$this->load->view('destinations/region11/historical/view_region11');
	}
	public function regionXIc() {
		$this->load->view('destinations/region11/churches/view_churches');
	}
	public function regionXII() {
		$this->load->view('destinations/region12/historical/view_region12');
	}
	public function regionXIIc() {
		$this->load->view('destinations/region12/churches/view_churches');
	}
}

/*<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
}*/