<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->output->enable_profiler(TRUE);
		
		$this->load->database();
		$query = $this->db->get('test1')->result_array();


		    var_dump($query);
		

	}



}
