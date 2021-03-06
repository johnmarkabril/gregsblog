<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About_model extends CI_Model
{

	public $table			=	"about";
	public $dbno			=	"NO";
	public $stat			= 	"STATUS";

	function __construct()
	{
		parent::__construct();
	}

	// public function get_status_act()
	// {
	// 	$row = $this->db->where($this->stat, "1")
	// 					->limit(1)
	// 					->get($this->table);

	// 	return $row->result();
	// }

	public function get_all_about()
	{
		$row = $this->db->where($this->stat, "1")
						->order_by($this->dbno, "ASC")
						->get($this->table);

		return $row->result();
	}

}