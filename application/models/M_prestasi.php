<?php

class M_prestasi extends CI_Model {

	public function get_prestasi()
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_prestasi p');
		$this->db->JOIN('tbl_user u','p.fk_user = u.id_user');
		$this->db->ORDER_BY('p.created_at', 'DESC');

		return $this->db->get();
	}

}