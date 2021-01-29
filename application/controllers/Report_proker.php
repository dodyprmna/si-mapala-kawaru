<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_proker extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_program_kerja');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Report_proker/index', 
            'js'            => 'report',
            'menu'          => 'report_proker',
        );
		$this->load->view('Components/main',$data);
    }

    public function list()
    {
        // get data proker

        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data['proker'] = $this->M_program_kerja->get_report($tahun)->result();
        $data['tahun'] = $tahun;
        
        // set output
        $output = $this->load->view('Report_proker/list',$data,true);

        // echo output dalam bentuk json
    	echo json_encode($output);
    }
}