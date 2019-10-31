<?php

class Members extends CI_Controller {

	public function index()
	{
    //Model
		$this->load->model('M_Profile');
		$data['profile'] = $this->M_profile->getdata_profile();

		//View		
		$this->load->view('V_members', $data);
    }
}
