<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


public function tambah_produkkami()
	{		
		if(isset($_POST['submit'])){                                	
    		$this->tambah_produkkami->create();
    		redirect('welcome/tambah_produkkami');    		
        }
        else {
        	$this->load->view('tambah_produkkami');        	
        }             
	}
}