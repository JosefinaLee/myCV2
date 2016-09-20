<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_detail extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("blog_model");
		$this->load->model("blog_category_model");
		$this->load->model("comment_model");
	}


	public function view_blog(){
		$blog_id = $this -> input -> get("blogId");
		$blog_info = $this -> blog_model -> get_blog_by_id($blog_id);
		$blog_info -> comments = $this -> comment_model -> get_comment_by_id($blog_id);
		$data = array(
			"blog_info" => $blog_info
		);
		$this -> load ->view("blog_detail", $data);

	}

	public function add_comment(){
		$data = array(
			"blog_id" => $this -> input -> post("blogId"),
			"comment_name" => $this -> input -> post("username"),
			"comment_phone" => $this -> input -> post("phone"),
			"comment_email" => $this -> input -> post("email"),
			"comment_content" => $this -> input -> post("message")
		);
		$row = $this -> comment_model -> save_comment($data);

		if($row){
			echo "success";
		}else{
			echo "fail";
		}
	}




}

