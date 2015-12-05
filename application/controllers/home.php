<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}
	
	public function gallery(){
		$this->load->view('templates/header');
		$this->load->view('gallery');
		$this->load->view('templates/footer');
	}
	
	public function aboutus(){
		$this->load->view('templates/header');
		$this->load->view('aboutus');
		$this->load->view('templates/footer');
	}
	
	public function menus(){
		$this->load->view('templates/header');
		$this->load->view('menus');
		$this->load->view('templates/footer');
	}
	
	public function contactus(){
		$this->load->view('templates/header');
		$this->load->view('contactus');
		$this->load->view('templates/footer');
	}
	
	public function findus(){
		$this->load->library('googlemaps');
		$marker = array();
		$marker['position'] = '31.521617,74.290260'; 
		$config['geocodeCaching'] = TRUE;
		$config['map_type'] = "ROADMAP";
		$config['map_height'] = "350px";
		$config['zoom'] = "15";
		$config['center'] = "31.521617,74.290260";
		
		$this->googlemaps->add_marker($marker);
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		
		$this->load->view('templates/header',$data);
		$this->load->view('findus',$data);
		$this->load->view('templates/footer');
	}
}
?>