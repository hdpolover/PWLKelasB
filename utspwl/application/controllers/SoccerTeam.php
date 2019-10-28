<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SoccerTeam extends CI_Controller
{
	public function index()
	{
		$x['datateam'] = $this->Team_model->index();
		$this->load->view('Team_view', $x);
	}
}
