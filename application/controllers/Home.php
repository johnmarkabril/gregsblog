<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage="home";
    }

	public function index()
	{
		$details = array(

		);
		$data['curpage'] = $this->curpage;
		$data['content'] = $this->load->view('home.php', $details, TRUE);
		$this->load->view('common_files.php', $data);

	}
}
