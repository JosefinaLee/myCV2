<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function get_all()
	{
		$this -> db -> order_by("time", "desc");
		return $this -> db -> get("t_admin") -> result;

	}


	public function get_by_id(){
		return $this -> db -> get_where("t_admin", array(
				"id" => id
		)) -> result;




		$query=$this->db->get_where("product", array("product_id" => $data));

		return $query->row();
	}
}

