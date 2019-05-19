<?php defined('BASEPATH') OR exit('No direct script acces allowed');

/**
 * 
 */
class Barang extends CI_controller
{    
    //
	public function __construct(){
		parent::__construct();
    }
    
    public function index ()
    {
		$this->load->view("admin/overview");
    }
    
    //
    public function Add(){

    }

    //
    public function Edit(){

    }
}