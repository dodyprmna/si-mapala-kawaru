<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budgeting extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_program_kerja');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Budgeting/index', 
            'js'            => 'budgeting',
            'menu'          => 'budgeting',
        );
		$this->load->view('Components/main',$data);
    }

    public function list() // fungsi untuk menampilkan data proker 
    {
        // get data proker
        $data['proker'] = $this->M_codeigniter->get('tbl_program_kerja')->result();
        
        // set output
        $output = $this->load->view('Budgeting/list',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    public function data_update()// fungsi untuk menampilkan form update proker
    {
        $id = $this->input->post('id');

        // get data proker by id
        $data['proker']         = $this->M_codeigniter->get_where('tbl_program_kerja',array('id_proker' => $id))->row();

        // set output dalam bentuk array dan set data proker yg akan diupdate pada form update
        $output = array(
            'html' => $this->load->view('Budgeting/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    public function update()// fungsi untuk update data proker
    {

        $id = $this->input->post('id');
        // ambil value dari form inputan
        $dana        = $this->input->post('dana');

        // set dalam bentuk array
        $data = array(
            'dana'                  => $dana,
        );

        // update data proker di db
    	$update = $this->M_codeigniter->update('tbl_program_kerja',$data, array('id_proker'=>$id));

        
        if ($update) { // jika berhasil update data proker
            
            // set data activity
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Update budget proker id('.$id.')'
            );

            // insert data activity ke dalam tabel activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            // set output
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Anggaran dana berhasil diupdate'
    		);
    	}else{

            // set output
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Anggaran dana gagal diupdate'
    		);
    	}

        // echo output dalam bentuk json
    	echo json_encode($output);
    }    
}