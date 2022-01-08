<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('post');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function archive($search = '')
	{
		$posts = $this->post->get_all($search);

		$data = array(
			'posts' => $posts,
		);

		$this->core->set_title('Главная | %SITENAME%');

		$this->core->Display('posts/archive', $data);
	}

	public function single($slug)
	{
		$data = array(
			'post' => $this->post->get($slug),
		);

		$this->core->set_title("{$data['post']->slug} | %SITENAME%");

		$this->core->Display('posts/single', $data);
	}
}
