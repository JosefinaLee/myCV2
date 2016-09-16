<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cv extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("blog_model");
	}
	public function index()
	{
		$blog = $this -> blog_model -> get_blog_all();
		$data = array(
			"blogs" => $blog
		);
		$this->load->view('index', $data);
	}
}

