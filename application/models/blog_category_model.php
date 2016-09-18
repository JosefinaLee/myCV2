<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_category_model extends CI_Model {

	public function get_categories()
	{

        return $this->db->get("t_blog_category")->result();

	}

}

