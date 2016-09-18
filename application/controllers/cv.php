<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cv extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("blog_model");
		$this->load->model("blog_category_model");
	}
	public function index()
	{
		$blog = $this -> blog_model -> get_blog_all();
		$category = $this -> blog_category_model -> get_categories();
//		$blog -> category = $this -> blog_category_model -> get_categories();
//		var_dump($blog-> category);
//		die();

		$data = array(
			"blogs" => $blog,
			"categories" => $category
		);
		$this->load->view('index', $data);
	}

	public function get_blog(){
		$cate_id = $this -> input -> get("cateId");
//		var_dump($cate_id);
//		die();
		if(!$cate_id){
			$blogs = $this -> blog_model -> get_blog_all();
		}else{
			$blogs = $this -> blog_model -> get_blog_by_cate_id($cate_id);
		}
		echo json_encode($blogs);
	}

	public function view_blog(){
		$blog_id = $this -> input -> get("blogId");
		$data = array(
			"blog_id" => $blog_id
		);
		$this -> load ->view("blog_detail", $data);

	}



}

