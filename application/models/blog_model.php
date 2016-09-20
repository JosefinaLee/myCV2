<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public function get_blog_six($offset=0)
	{
        $this -> db -> select("blog.*, cate.cate_name");
        $this -> db -> from("t_blog blog");
        $this -> db -> join("t_blog_category cate", "blog.cate_id = cate.cate_id");
        $this -> db -> order_by("blog_id", "asc");
        $this -> db ->limit(6, $offset);
        return $this->db->get()->result();
	}

    public function get_blog_by_cate_id_six($cate_id, $offset=0){
        $this -> db ->limit(6, $offset);
        $this -> db -> select("blog.*, cate.cate_name");
        $this -> db -> from("t_blog blog");
        $this -> db -> join("t_blog_category cate", "blog.cate_id = cate.cate_id");
        $this -> db -> where("cate.cate_id", $cate_id);
        $this -> db -> order_by("blog_id", "asc");
        return $this -> db -> get() -> result();
    }

    public function get_blog_by_id($blog_id){
        $this -> db -> select("blog.*, cate.cate_name");
        $this -> db -> from("t_blog blog");
        $this -> db -> join("t_blog_category cate", "blog.cate_id = cate.cate_id");
        $this -> db -> where("blog.blog_id", $blog_id);
        return $this -> db -> get() -> row();

    }

    public function get_comment_by_id($blog_id){
        $this -> db -> order_by("comment_time", "desc");
        return $this -> db ->get_where("t_comment", array(
            "blog_id" => $blog_id
        )) -> result();
    }


//    public function get_blog_offset($offset){
//        $this -> db -> select("blog.*, cate.cate_name");
//        $this -> db -> from("t_blog blog");
//        $this -> db -> join("t_blog_category cate", "blog.cate_id = cate.cate_id");
//        $this -> db -> order_by("blog_id", "asc");
//        $this -> db ->limit(6, $offset);
//        return $this->db->get()->result();
//    }
//
//    public function get_blog_offset_by_cate($offset, $cate_id){
//        $this -> db -> select("blog.*, cate.cate_name");
//        $this -> db -> from("t_blog blog");
//        $this -> db -> join("t_blog_category cate", "blog.cate_id = cate.cate_id");
//        $this -> db -> where("cate.cate_id", $cate_id);
//        $this -> db -> order_by("blog_id", "asc");
//        $this -> db ->limit(6, $offset);
//        return $this -> db -> get() -> result();
//
//    }

//    public function get_blog_all()
//    {
//
//        return $this->db->get("t_blog")->result();
//
//    }
//
//    public function get_blog_by_cate_id($cate_id){
//        return $this -> db -> get_where("t_blog", array(
//            "cate_id" => $cate_id
//        )) -> result();
//    }



}

