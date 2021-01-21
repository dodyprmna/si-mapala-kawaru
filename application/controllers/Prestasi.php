<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_prestasi');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Prestasi/index', 
            'js'            => 'prestasi',
            'menu'          => 'prestasi',
        );
		$this->load->view('Components/main',$data);
    }

    public function insert() //fungsi untuk insert data prestasi
    {

        // ambil value dari form inputan
        $nama_prestasi = $this->input->post('nama_prestasi');
        $tahun   = $this->input->post('tahun');
        $user = $this->session->userdata('id_user');

        // simpan dalam bentuk array
        $data = array(
            'prestasi'           => $nama_prestasi, 
            'tahun'              => $tahun,
            'fk_user'            => $user,
        );

        // insert ke tabel prestasi 
    	$insert = $this->M_codeigniter->insert('tbl_prestasi',$data);


        if ($insert) { // jika berhasil insert ke db
            
            // set data activity dalam bentuk array
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Input Prestasi '.$nama_prestasi
            );

            // insert $data_activity pada tabel activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);


            // set output dalam bentuk array
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Prestasi berhasil ditambahkan'
    		);
    	}else{

            // set output dalam bentuk array
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Prestasi gagal ditambahkan'
    		);
    	}

        // echo $output dalam bentuk json
    	echo json_encode($output);
    }

    public function list()//fungsi untuk menampilkan data prestasi
    {
        // get data pretasi
        $data['prestasi'] = $this->M_prestasi->get_prestasi()->result();
        
        // set output
        $output = $this->load->view('Prestasi/list',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    public function data_update()// fungsi untuk menampilkan form untuk update prestasi
    {
        $id = $this->input->post('id');

        // get data prestasi by id
        $data['prestasi']         = $this->M_codeigniter->get_where('tbl_prestasi',array('id_prestasi' => $id))->row();

        // set output
        $output = array(
            'html' => $this->load->view('Prestasi/update',$data,true), 
        );


        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    public function update() // fungsi untuk mengupdate data prestasi
    {

        // ambil value dari form inputan
        $id          = $this->input->post('id');
        $nama_prestasi = $this->input->post('nama_prestasi');
        $tahun   = $this->input->post('tahun');

        // simpan dalam bentuk array
        $data = array(
            'prestasi'           => $nama_prestasi, 
            'tahun'              => $tahun,
        );

        // update data prestasi
    	$update = $this->M_codeigniter->update('tbl_prestasi',$data, array('id_prestasi'=>$id));

        if ($update) {// jika berhasil update
            
            // set data activity dalam bentuk array
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Update Prestasi id('.$id.')'
            );

            // insert activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);


            // set output dalam bentuk array
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Prestasi berhasil diupdate'
    		);
    	}else{
            // set output dalam bentuk array
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Prestasi gagal diupdate'
    		);
    	}

        // echo output dalam bentuk json
    	echo json_encode($output);
    }    
}