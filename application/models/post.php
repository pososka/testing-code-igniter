<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model
{
	public function get_all($slug = '')
	{
		$query = $this->db->get('posts');

		return $query->result_object();
	}

	public function get($slug = '')
	{
		$this->db->where('slug', $slug);
		$query = $this->db->get('posts');
		
		return $query->row();
	}
}
