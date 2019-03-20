<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
 
	public function index(){
		echo "ini method index pada controller belajar";
	}
 
	public function halo(){
		$data['nama_web'] = "MalasNgoding.com";
		$this->load->view('view_belajar', $data);
	}
 
}