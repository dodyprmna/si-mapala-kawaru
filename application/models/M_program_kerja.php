<?php

class M_program_kerja extends CI_Model {

    public function get_report($tahun)
	{
		$query = $this->db->query("SELECT *
								   FROM tbl_program_kerja
								   WHERE CASE 
									   WHEN $tahun = 0 THEN YEAR(tanggal_mulai_proker) != 0
									   ELSE YEAR(tanggal_mulai_proker) = $tahun
									   END
								   ORDER BY tanggal_mulai_proker ASC
								");
		return $query;
	}
}