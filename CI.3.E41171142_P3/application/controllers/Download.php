<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	public function index(){		
		$this->load->view('v_download');
	}

	public function lakukan_download(){				
		//$isi = 'Here is some text!';
		//$nama_file = 'mytext.txt';
		//force_download($nama_file, $isi);
		force_download('file/malasngoding.jpg', NULL);
	}	

}