<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
     	$data['photos'] = $this->application_model->getPhotos();
		$this->load->view('home_view', $data);
	}
}