<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage= "Home";
        $this->load->model("About_model");
        $this->load->model("Work_model");
    }

	public function index()
	{
		$details = array(
			'get_all_about'	=>	$this->About_model->get_all_about(),
			'get_all_work'	=>	$this->Work_model->get_all_work()
		);
		
		$data['content'] = $this->load->view('homecontent', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$this->load->view('home', $data);
	}
}