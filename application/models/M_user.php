<?php

class M_user extends CI_Model {

	public function get_session($username)
	{
		$query = $this->db->query("SELECT *
								   FROM tbl_user u
								   JOIN tbl_role r ON u.fk_id_role = r.id_role
								   WHERE u.username = '$username'");
		return $query->row();
	}

	public function get_all_user()
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_user u');
		$this->db->JOIN('tbl_role r','u.fk_id_role=r.id_role');

		return $this->db->get();
	}
}