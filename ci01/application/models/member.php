<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model {
	public function getAll()
	{
		$query = $this->db->query('SELECT name, title, email FROM member');
		return $query->result();

		
	}
}