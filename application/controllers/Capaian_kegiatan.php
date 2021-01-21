<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capaian_kegiatan extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_capaian_kegiatan');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Capaian_kegiatan/index',
            'js'            => 'capaian_kegiatan',
            'menu'          => 'capaian_kegiatan',
            'kegiatan'      => $this->M_codeigniter->get('tbl_kegiatan')->result()// get data program kerja
        );

        // load view Component/main
		$this->load->view('Components/main',$data);
    }

    public function insert()//fungsi untuk insert data capaian kegiatan
    {

        // ambil value dari form inputan

        $kegiatan            = $this->input->post('kegiatan');
        $judul_penelitian   = $this->input->post('judul_penelitian');

        $kegiatan_u = $this->M_codeigniter->get_where('tbl_kegiatan',array('ketupel'=>$this->session->userdata('id_user'), 'id_kegiatan' => $kegiatan))->num_rows();
        $pelaksana  = $this->M_codeigniter->get_where('tbl_detail_kegiatan',array('fk_user'=>$this->session->userdata('id_user'), 'fk_kegiatan' => $kegiatan))->num_rows();


        // masukkan value dalam bentuk array
        // yang nantinya akan diinsert ke database
        $data = array(
            'fk_kegiatan'             => $kegiatan, 
            'fk_user'                 => $this->session->userdata('id_user'),
            'judul_penelitian'        => $judul_penelitian,
        );

        // insert ke tabel kegiatan

        if ($kegiatan_u > 0 || $pelaksana > 0) {
            $insert = $this->M_codeigniter->insert('tbl_capaian_kegiatan',$data);
        }else{
            $output = array(
    			'status'	=> false, 
    			'pesan'		=> 'Anda tidak terdaftar sebagai pelaksana di kegiatan tersebut'
            );
            
            echo json_encode($output);
            exit();
        }
    	
        if ($insert) {// jika berhasil insert ke db
            // buat array untuk data activity
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Input Capaian Kegiatan '
            );

            // insert tabel activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            // array output untuk output dalam bentuk json
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Capaian kegiatan berhasil ditambahkan'
    		);
    	}else{
            // array output untuk output dalam bentuk json
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Capaian Kegiatan gagal ditambahkan'
    		);
    	}

        // menampilkan array output dalam bentuk json
    	echo json_encode($output);
    }

    public function list() //fungsi untuk menampilkan list capaian kegiatan
    {
        // get data kegiatan
        if ($this->session->userdata('role') == 9 || $this->session->userdata('role') == 7 || $this->session->userdata('role') == 1) {
            $data['capaian_kegiatan'] = $this->M_capaian_kegiatan->get_all()->result();
        }else{
            $data['capaian_kegiatan'] = $this->M_capaian_kegiatan->get_by_user($this->session->userdata('id_user'))->result();
        }
        
        // set output dengan load view kegiatan/list
        $output = $this->load->view('Capaian_kegiatan/list',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    public function data_update()  // fungsi untuk menampilkan form update capaian kegiatan
    {
        $id = $this->input->post('id');
        
        // get data kegiatan 
        $data['kegiatan']         = $this->M_codeigniter->get('tbl_kegiatan')->result();

        // get capaian_kegiatan
        $data['capaian']           = $this->M_codeigniter->get_where('tbl_capaian_kegiatan',array('id_capaian'=>$id))->row();

        // set output dengan load view form update capaian kegiatan
        $output = array(
            'html' => $this->load->view('Capaian_kegiatan/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    public function update()  // fungsi untuk update data kegiatan
    {

        $id                  = $this->input->post('id');
        $kegiatan            = $this->input->post('kegiatan');
        $judul_penelitian    = $this->input->post('judul_penelitian');

        $kegiatan_u = $this->M_codeigniter->get_where('tbl_kegiatan',array('ketupel'=>$this->session->userdata('id_user'), 'id_kegiatan' => $kegiatan))->num_rows();
        $pelaksana  = $this->M_codeigniter->get_where('tbl_detail_kegiatan',array('fk_user'=>$this->session->userdata('id_user'), 'fk_kegiatan' => $kegiatan))->num_rows();


        // masukkan value dalam bentuk array
        // yang nantinya akan diinsert ke database
        $data = array(
            'fk_kegiatan'             => $kegiatan, 
            'fk_user'                 => $this->session->userdata('id_user'),
            'judul_penelitian'        => $judul_penelitian,
        );

        // insert ke tabel kegiatan

        if ($kegiatan_u > 0 || $pelaksana > 0) {
            $update = $this->M_codeigniter->update('tbl_capaian_kegiatan',$data, array('id_capaian'=>$id));
        }else{
            $output = array(
    			'status'	=> false, 
    			'pesan'		=> 'Anda tidak terdaftar sebagai pelaksana di kegiatan tersebut'
            );
            
            echo json_encode($output);
            exit();
        }

        if ($update) { // jika update sudah dijalankan
            // set data activity dalam bentuk array

            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Update capaian kegiatan id('.$id.')'
            );

            // insert activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            // set output dalam bentuk array
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Capaian kegiatan berhasil diupdate'
    		);
    	}else{

             // set output dalam bentuk array
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Capaian kegiatan gagal diupdate'
    		);
    	}

        // echo output dalam bentuk json
    	echo json_encode($output);
    }    
}