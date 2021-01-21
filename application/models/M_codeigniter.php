<?php

class M_codeigniter extends CI_Model {

	function query($query){
		return $this->db->query($query);
	}

	function get($table){
		return $this->db->get($table);
	}

	function get_where($table, $where){
		return $this->db->get_where($table, $where);
	}
	
	function insert($table, $data){
		$this->db->insert($table, $data);
		if ($this->db->affected_rows() > 0) {
            // return $this->db->insert_id();
            return true;
        } else {
            return false;
        }
	}

	function update($table, $data, $where){
		$this->db->update($table, $data, $where);
		if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	function insert_get_id($table, $data){
		$this->db->insert($table, $data);
		if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
	}

	public function get_tahun()
	{
		$query = $this->db->query("SELECT distinct(YEAR(tgl_upload)) as tahun
                                    FROM  tbl_faktur_pajak");
		return $query;
	}
}