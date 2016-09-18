<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public function get_blog_all()
	{

        return $this->db->get("t_blog")->result();

	}

    public function get_blog_by_cate_id($cate_id){
        return $this -> db -> get_where("t_blog", array(
            "cate_id" => $cate_id
        )) -> result();
    }



}

