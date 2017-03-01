<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		echo "hollo home";
		//$this->load->view('welcome_message');
	}

	public function getdate()
	{
		$this->load->model('member');
		$rows = $this->member->getAll();

		foreach ($rows as $row)
		{
   		    $data['title']=$row->title;
    		$data['name']=$row->name;
    		$data['email']=$row->email;
    		
		}
		$this->load->view('post',$data);
	}
}
