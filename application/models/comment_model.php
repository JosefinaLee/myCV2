<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {



    public function get_comment_by_id($blog_id){
        $this -> db -> order_by("comment_time", "desc");
        return $this -> db ->get_where("t_comment", array(
            "blog_id" => $blog_id
        )) -> result();
    }

    public function save_comment($data){
        $this -> db -> insert("t_comment", $data);
        return $this -> db -> affected_rows();
    }



}

