<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core
{
	private $CI;

	private $document_title;

	function __construct()
	{
		$this->CI = &get_instance();
	}

	public function set_title($title)
	{
		$this->document_title = str_replace(
			array(
				'%SITENAME%',
			),
			array(
				$this->CI->config->item('sitename'),
			),
			$title
		);
	}

	public function get_title()
	{
		return $this->document_title;
	}

	public function Display($view, $data = array())
	{
		$this->CI->load->view('header');
		$this->CI->load->view($view, $data);
		$this->CI->load->view('footer');
	}
}
