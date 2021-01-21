<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	public function __construct() {
        Parent::__construct();
        $this->load->model('M_codeigniter');
        $this->load->model('M_kegiatan');
        if($this->session->userdata('login') != true){
            redirect('Auth');
        }
	}

	public function index(){
        $data = array(
            'content'       => 'Kegiatan/index',
            'js'            => 'kegiatan',
            'menu'          => 'kegiatan',
            'ketupel'       => $this->M_codeigniter->get('tbl_user')->result(),
            'proker'        => $this->M_codeigniter->get('tbl_program_kerja')->result()// get data program kerja
        );

        // load view Component/main
		$this->load->view('Components/main',$data);
    }

    public function insert()//fungsi untuk insert data kegiatan
    {

        // ambil value dari form inputan

        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $tgl_mulai   = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $lokasi      = $this->input->post('lokasi');
        $proker      = $this->input->post('proker');
        $ketupel     = $this->input->post('ketupel');


        // masukkan value dalam bentuk array
        // yang nantinya akan diinsert ke database
        $data = array(
            'nama_kegiatan'             => $nama_kegiatan, 
            'tanggal_mulai_kegiatan'    => $tgl_mulai,
            'tanggal_selesai_kegiatan'  => $tgl_selesai,
            'fk_proker'                 => $proker,
            'lokasi_kegiatan'           => $lokasi,
            'ketupel'                   => $ketupel
        );

        // insert ke tabel kegiatan
    	$insert = $this->M_codeigniter->insert('tbl_kegiatan',$data);

        if ($insert) {// jika berhasil insert ke db
            // buat array untuk data activity
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Input Kegiatan '.$nama_kegiatan
            );

            // insert tabel activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            // array output untuk output dalam bentuk json
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Kegiatan berhasil ditambahkan'
    		);
    	}else{
            // array output untuk output dalam bentuk json
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Kegiatan gagal ditambahkan'
    		);
    	}

        // menampilkan array output dalam bentuk json
    	echo json_encode($output);
    }

    public function list() //fungsi untuk menampilkan list kegiatan
    {
        // get data kegiatan
        if ($this->session->userdata('role') == 8) {
            $data['kegiatan'] = $this->M_kegiatan->get_by_ketupel($this->session->userdata('id_user'))->result();
        }else{
            $data['kegiatan'] = $this->M_kegiatan->get_kegiatan()->result();
        }
        // set output dengan load view kegiatan/list
        $output = $this->load->view('Kegiatan/list',$data,true);
        
        // echo output dalam bentuk json
    	echo json_encode($output);
    }

    public function data_update()  // fungsi untuk menampilkan form update kegiatan
    {
        $id = $this->input->post('id');
        
        // get data kegiatan by id
        $data['kegiatan']         = $this->M_codeigniter->get_where('tbl_kegiatan',array('id_kegiatan' => $id))->row();

        // get data user
        $data['ketupel']           = $this->M_codeigniter->get('tbl_user')->result();

        // get data proker
        $data['proker']           = $this->M_codeigniter->get('tbl_program_kerja')->result();


        // set output dengan load view form update kegiatan
        $output = array(
            'html' => $this->load->view('Kegiatan/update',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
        
    }

    public function update()  // fungsi untuk update data kegiatan
    {

        // ambil value dari form inputan
        $id             = $this->input->post('id');
        $nama_kegiatan  = $this->input->post('nama_kegiatan');
        $ketupel        = $this->input->post('ketupel');

        // simpan dalam bentuk array
        $data = array(
            'nama_kegiatan'           => $nama_kegiatan, 
            'ketupel'                 => $ketupel
        );



        // update data kegiatan ke dalam db
    	$update = $this->M_codeigniter->update('tbl_kegiatan',$data, array('id_kegiatan'=>$id));

        if ($update) { // jika update sudah dijalankan
            // set data activity dalam bentuk array

            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Update Program Kerja id('.$id.')'
            );

            // insert activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            // set output dalam bentuk array
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Kegiatan berhasil diupdate'
    		);
    	}else{

             // set output dalam bentuk array
    		$output = array(
    			'status'	=> false,
    			'pesan'		=> 'Kegiatan gagal diupdate'
    		);
    	}

        // echo output dalam bentuk json
    	echo json_encode($output);
    }    

    public function form_pelaksana()
    {
        $id = $this->input->post('id');
        $data['ekspeditor'] = $this->M_codeigniter->get('tbl_user')->result();
        $data['id'] = $id;

        $ekspeditor = $this->M_codeigniter->get_where('tbl_detail_kegiatan',array('fk_kegiatan' => $id))->result();
        $data['detail'] = array();

        foreach ($ekspeditor as $row) {
            $data['detail'][] = $row->fk_user;
        }

        $data['pendanaan'] = $this->M_codeigniter->get_where('tbl_pendanaan',array('fk_kegiatan' => $id))->row();
        $data['kegiatan'] = $this->M_kegiatan->get_by_id($id)->row();

        $output = array(
            'html' => $this->load->view('Kegiatan/form_pelaksana',$data,true), 
        );

        // echo output dalam bentuk json
        echo json_encode($output);
    }

    public function insert_pelaksana()
    {
        $id = $this->input->post('id');
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $lokasi = $this->input->post('lokasi');
        $ekspeditor = $this->input->post('ekspeditor');
        $pemasukan      = $this->input->post('pemasukan');
        $pengeluaran    = $this->input->post('pengeluaran');

        $pendanaan = $this->M_codeigniter->get_where('tbl_pendanaan',array('fk_kegiatan'=>$id))->num_rows();

        if ($pendanaan == 0) {
            $data_pendanaan = array(
                'fk_kegiatan'   => $id,
                'pemasukan'     => $pemasukan, 
                'pengeluaran'   => $pengeluaran
            );
            $pendanaann = $this->M_codeigniter->insert('tbl_pendanaan',$data_pendanaan);
        }else{
            $data_pendanaan = array(
                'pemasukan'     => $pemasukan, 
                'pengeluaran'   => $pengeluaran
            );
            $pendanaann = $this->M_codeigniter->update('tbl_pendanaan',$data_pendanaan,array('fk_kegiatan'=>$id));
        }

        $data_update = array(
            'tanggal_mulai_kegiatan'    => $tgl_mulai, 
            'tanggal_selesai_kegiatan'  => $tgl_selesai,
            'lokasi_kegiatan'           => $lokasi
        );

        $data = array();

        foreach ($ekspeditor as $key => $value) {
            $data[] = array(
                'fk_kegiatan' => $id,
                'fk_user'     => $value
            );
        }

        $this->db->update('tbl_kegiatan',$data_update,array('id_kegiatan'=>$id));

        $detail = $this->M_codeigniter->get_where('tbl_detail_kegiatan', array('fk_kegiatan' => $id))->num_rows();

        if ($detail > 0) {
            $this->db->delete('tbl_detail_kegiatan',array('fk_kegiatan' => $id));
        }

        $insert = $this->db->insert_batch('tbl_detail_kegiatan',$data);

        if($insert && $pendanaann){
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Update detail kegiatan id('.$id.')'
            );

            // insert activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);

            // set output dalam bentuk array
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Detail kegiatan berhasil ditambahkan'
    		);
        }else{
            $output = array(
    			'status'	=> false, 
    			'pesan'		=> 'Detail kegiatan gagal ditambahkan'
    		);
        }

        echo json_encode($output);
    }

    public function detail_kegiatan()
    {
        $id = $this->input->post('id');

        $data['kegiatan'] = $this->M_kegiatan->get_by_id($id)->row();
        $data['pendanaan']= $this->M_codeigniter->get_where('tbl_pendanaan',array('fk_kegiatan'=>$id))->row();
        $data['kinerja']= $this->M_codeigniter->get_where('tbl_kinerja',array('fk_kegiatan'=>$id))->row();
        $data['detail'] = $this->M_kegiatan->get_detail($id)->result();

        $output = array(
            'html' => $this->load->view('Kegiatan/detail_kegiatan',$data,true), 
        );
        echo json_encode($output);
    }

    public function form_kinerja()
    {
        $id = $this->input->post('id');

        $data['id'] = $id;
        $data['kinerja'] = $this->M_codeigniter->get_where('tbl_kinerja',array('fk_kegiatan'=>$id))->row();

        $output = array(
            'html' => $this->load->view('Kegiatan/form_kinerja',$data,true), 
        );
        echo json_encode($output);
    }

    public function insert_kinerja()
    {
        $id = $this->input->post('id');
        $point_1 = $this->input->post('point_1');
        $point_2 = $this->input->post('point_2');
        $point_3 = $this->input->post('point_3');
        $bobot = $point_1+$point_2+$point_3;

        $kinerja = $this->M_codeigniter->get_where('tbl_kinerja',array('fk_kegiatan' =>$id))->num_rows();

        if ($kinerja == 0) {
            $data_kinerja = array(
                'fk_kegiatan'   => $id, 
                'point_1'       => $point_1,
                'point_2'       => $point_2,
                'point_3'       => $point_3,
                'bobot'         => $bobot
            );
            $insert = $this->db->insert('tbl_kinerja',$data_kinerja);
        }else{
            $data_kinerja = array(
                'point_1'       => $point_1,
                'point_2'       => $point_2,
                'point_3'       => $point_3,
                'bobot'         => $bobot
            );
            $insert = $this->db->update('tbl_kinerja',$data_kinerja,array('fk_kegiatan' =>$id));
        }

        if($insert){
            $data_activity = array(
                'fk_id_user'    => $this->session->userdata('id_user'), 
                'activity'      => 'Update detail kegiatan id('.$id.')'
            );

            // insert activity
            $this->M_codeigniter->insert('tbl_activity',$data_activity);
            // set output dalam bentuk array
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Data kinerja kegiatan berhasil ditambahkan'
    		);
        }else{
            // set output dalam bentuk array
    		$output = array(
    			'status'	=> true, 
    			'pesan'		=> 'Data kinerja kegiatan gagal ditambahkan'
    		);
        }

        echo json_encode($output);
    }
}