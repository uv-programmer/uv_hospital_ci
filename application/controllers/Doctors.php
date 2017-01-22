<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {

	public function addDoc()
	{
		$this->load->view('doctors/addDocData');
	}


}