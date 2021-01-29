<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_kegiatan extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_kegiatan');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Report_kegiatan/index', 
            'js'            => 'report',
            'menu'          => 'report_kegiatan',
        );
		$this->load->view('Components/main',$data);
    }

    public function list() // fungsi untuk menampilkan data proker 
    {
        // get data proker

        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data['bulan']    = $bulan;
        $data['tahun']    = $tahun;
        $data['kegiatan'] = $this->M_kegiatan->get_report($bulan, $tahun)->result();
        
        // set output
        $output = $this->load->view('Report_kegiatan/list',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }
}