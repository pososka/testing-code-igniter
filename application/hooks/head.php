<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function document_tittle()
{
	$CI = &get_instance();

	echo '<title>' . $CI->core->get_title() . '</title>';
}

function document_links()
{
	echo '<link rel="stylesheet" href="' . base_url('assets/vendor/bootstrap-4/css/bootstrap.min.css') . '">';
	echo '<link rel="stylesheet" href="' . base_url('assets/css/style.css') . '">';
}
