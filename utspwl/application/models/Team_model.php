<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team_model extends CI_Model
{

	public function index()
	{
		$query = $this->db->query("SELECT * FROM team order by ((menang * 3) + draw) DESC");
		return $query->result();
	}
}
