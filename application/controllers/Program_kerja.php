<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_kerja extends CI_Controller {
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
            'content'       => 'Program_kerja/index', 
            'js'            => 'program_kerja',
            'menu'          => 'program kerja',
        );
		$this->load->view('Components/main',$data);
    }

    public function insert() // fungsi untuk insert data proker ke db
    {

        // ambil value dari form inputan
        $nama_proker = $this->input->post('nama_proker');
        $tgl_mulai   = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $lokasi      = $this->input->post('lokasi');

        // simpan value dalam bentuk array
        $data = array(
            'nama_proker'           => $nama_proker, 
            'tanggal_mulai_proker'  => $tgl_mulai,
            'tanggal_selesai_proker'=> $tgl_selesai,
            'lokasi'                => $lokasi
        );

        // insert ke db
    	$insert = $this->M_codeigniter->insert('tbl_program_kerja',$data);

        if ($insert) { //jika insert berhasil dijalankan
            
            // set data activity dalam bentuk array
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Input Program Kerja '.$nama_proker
            );

            // insert data activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            // set output dalam bentuk array
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Program kerja berhasil ditambahkan'
    		);
    	}else{

            // set output dalam bentuk array
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Program kerja gagal ditambahkan'
    		);
    	}

        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    public function list() // fungsi untuk menampilkan data proker 
    {
        // get data proker
        $data['proker'] = $this->M_codeigniter->get('tbl_program_kerja')->result();
        
        // set output
        $output = $this->load->view('Program_kerja/list',$data,true);
        
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
            'html' => $this->load->view('Program_kerja/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    public function update()// fungsi untuk update data proker
    {

        // ambil value dari form inputan
        $id          = $this->input->post('id');
        $nama_proker = $this->input->post('nama_proker');
        $tgl_mulai   = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $lokasi      = $this->input->post('lokasi');

        // set dalam bentuk array
        $data = array(
            'nama_proker'           => $nama_proker, 
            'tanggal_mulai_proker'  => $tgl_mulai,
            'tanggal_selesai_proker'=> $tgl_selesai,
            'lokasi'                => $lokasi
        );

        // update data proker di db
    	$update = $this->M_codeigniter->update('tbl_program_kerja',$data, array('id_proker'=>$id));

        
        if ($update) { // jika berhasil update data proker
            
            // set data activity
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Update Program Kerja id('.$id.')'
            );

            // insert data activity ke dalam tabel activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            // set output
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Program kerja berhasil diupdate'
    		);
    	}else{

            // set output
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Program kerja gagal diupdate'
    		);
    	}

        // echo output dalam bentuk json
    	echo json_encode($output);
    }    
}