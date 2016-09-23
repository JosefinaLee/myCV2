<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_list extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("blog_model");
		$this->load->model("blog_category_model");
		$this->load->model("comment_model");
	}

	public function get_blog_list(){
        $cate = $this -> input ->get("cate_id");
		$category = $this -> blog_category_model -> get_categories();
        $blogs = $cate?$this->blog_model->get_blog_by_cate_id_six($cate):$this->blog_model->get_blog_six();
		$data = array(
			"categories" => $category,
			"blogs" => $blogs,
            "cate" => $cate
		);
		$this -> load -> view("blog_list", $data);
	}

	public function view_blog_list(){
		$cate_id = $this -> input ->get("cateId");

		if(!$cate_id) {
			$blogs = $this->blog_model->get_blog_six();
		}else{
			$blogs = $this->blog_model-> get_blog_by_cate_id_six($cate_id);
		}
		echo json_encode($blogs);
	}

	public function get_blog_more(){
		$offset = $this -> input -> get("offset");
		$cate_id = $this -> input -> get("cateId");
		if(!$cate_id){
			$blogs = $this -> blog_model -> get_blog_six($offset);
		}else{
			$blogs = $this -> blog_model -> get_blog_by_cate_id_six($cate_id, $offset);
		}
		echo json_encode($blogs);
	}


}

