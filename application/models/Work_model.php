<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Work_model extends CI_Model
{

	public $table			=	"work";
	public $dbno			=	"NO";
	public $stat			= 	"STATUS";

	function __construct()
	{
		parent::__construct();
	}

	public function get_all_work()
	{
		$row = $this->db->where($this->stat, "1")
						->order_by($this->dbno, "ASC")
						->get($this->table);

		return $row->result();
	}

}