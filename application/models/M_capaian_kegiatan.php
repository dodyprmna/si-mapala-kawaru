<?php

class M_capaian_kegiatan extends CI_Model {

	public function get_all()
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_capaian_kegiatan ck');
		$this->db->JOIN('tbl_kegiatan k','ck.fk_kegiatan = k.id_kegiatan');
		$this->db->JOIN('tbl_user u','ck.fk_user = u.id_user');
		$this->db->ORDER_BY('k.created_at', 'DESC');

		return $this->db->get();
	}

	public function get_by_user($id)
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_kegiatan k');
		$this->db->JOIN('tbl_program_kerja p','k.fk_proker = p.id_proker');
		$this->db->JOIN('tbl_user u','k.ketupel = u.id_user');
		$this->db->WHERE('k.id_kegiatan',$id);

		return $this->db->get();
	}

	public function get_by_ketupel($ketupel)
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_kegiatan k');
		$this->db->JOIN('tbl_program_kerja p','k.fk_proker = p.id_proker');
		$this->db->JOIN('tbl_user u','k.ketupel = u.id_user');
		$this->db->WHERE('k.ketupel',$ketupel);
		$this->db->ORDER_BY('k.created_at', 'DESC');

		return $this->db->get();
	}

	public function get_detail($id)
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_detail_kegiatan k');
		$this->db->JOIN('tbl_user u','k.fk_user = u.id_user');
		$this->db->WHERE('k.fk_kegiatan',$id);

		return $this->db->get();
	}

}