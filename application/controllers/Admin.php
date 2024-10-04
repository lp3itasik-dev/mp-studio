<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models', 'm');
        // if (!$this->session->userdata('status_login')) {
        //     redirect('Auth');
        // }
    }

    public function sidebar()
    {
        $data = array(
            'dok' => "",
            'work' => "",
            'vport' => "",
			'vlan' => "",
			'manualbook' => "",
        );

        $this->session->set_userdata($data);
    }

    public function index()
    {
        $this->sidebar();
        $data = array(
            'dok' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Dokumentasi";

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_dokumentasi', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/dok', $data);
        $this->load->view('include/footer');
    }

    public function dok()
    {
        $this->sidebar();
        $data = array(
            'dok' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Dokumentasi";

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_dokumentasi', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/dok', $data);
        $this->load->view('include/footer');
    }

    public function input_dokumentasi()
    {
        $this->sidebar();
        $data = array(
            'dok' => " active",
        );
        $this->session->set_userdata($data);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/input_dokumentasi', $data);
        $this->load->view('include/footer');
    }

    public function actinput_dokumentasi()
    {
        $config['upload_path']          = './foto/dokumentasi/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10000; //set max size allowed in Kilobyte

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_dokumentasi')) //upload and validate
        {
            echo "Gagal Tambah";
        } else {
            $foto                  = $this->upload->data();
            $foto                  = $foto['file_name'];
            $judul = $this->input->post('title', TRUE);
            $keterangan = $this->input->post('description', TRUE);
            $tahun = $this->input->post('year', TRUE);

            $data = array(
                'judul'           => $judul,
                'keterangan'      => $keterangan,
                'tahun'           => $tahun,
                'foto_dokumentasi' => $foto,
            );

            $d = $this->m->Save($data, 'tbl_dokumentasi');
            // var_dump($d);
            // die;
            redirect('Admin/input_dokumentasi');
        }
        redirect('Admin/input_dokumentasi');
    }

    public function id_dokumen()
    {
        $this->sidebar();
        $data = array(
            'dok' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Dokumentasi";

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_dokumentasi', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/id_dokumen', $data);
        $this->load->view('include/footer');
    }

    public function edit_dok()
    {
        $this->sidebar();
        $data = array(
            'dok' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Dokumentasi";

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_dokumentasi', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/edit_dok', $data);
        $this->load->view('include/footer');
    }

    public function actedit_dok()
    {
        $config['upload_path']          = './foto/dokumentasi/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10000; //set max size allowed in Kilobyte

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_dokumentasi')) //upload and validate
        {
            $title = $this->input->post('title', TRUE);
            $description = $this->input->post('description', TRUE);
            $year = $this->input->post('year', TRUE);
            $where = array(
                'id' => $this->input->post('id'),
            );
            $data = array(
                'judul'          => $title,
                'keterangan'          => $description,
                'tahun'          => $year,
            );
            $this->m->Update($where, $data, 'tbl_dokumentasi');
            redirect('Admin/dok');
        } else {

            $foto                  = $this->upload->data();
            $foto                  = $foto['file_name'];
            $title = $this->input->post('title', TRUE);
            $description = $this->input->post('description', TRUE);
            $year = $this->input->post('year', TRUE);
            $where = array(
                'id' => $this->input->post('id'),
            );

            $data = array(
                'judul'          => $title,
                'keterangan'          => $description,
                'tahun'          => $year,
                'foto_dokumentasi'          => $foto,
            );

            unlink(FCPATH . './foto/dokumentasi/' . $this->input->post('foto_lama'));

            $d = $this->m->Update($where, $data, 'tbl_dokumentasi');
            redirect('Admin/dok');
        }

        redirect('Admin/dok');
    }

    public function acthapus_dok()
    {
        $where = array(
            'id' => $this->input->post('id'),
        );

        unlink(FCPATH . './foto/dokumentasi/' . $this->input->post('foto_dokumentasi'));

        $this->m->Delete($where, 'tbl_dokumentasi');
        redirect('Admin/dok');
    }

    public function input_product()
    {
        $this->sidebar();
        $data = array(
            'work' => "active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Work";

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_karya', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/work', $data);
        $this->load->view('include/footer');
    }

    public function input_work()
    {
        $this->sidebar();
        $data = array(
            'work' => "active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Work";

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/input_work', $data);
        $this->load->view('include/footer');
    }

    public function actinput_work()
    {
        $config['upload_path']          = './foto/karya/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10000; //set max size allowed in Kilobyte

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_karya')) //upload and validate
        {
            echo "Gagal Tambah";
        } else {
            $foto                  = $this->upload->data();
            $foto                  = $foto['file_name'];
            $judul = $this->input->post('title', TRUE);
            $nama_lengkap = $this->input->post('name', TRUE);
            $kelas = $this->input->post('class', TRUE);
            $keterangan = $this->input->post('description', TRUE);
            $tahun = $this->input->post('year', TRUE);

            $data = array(
                'judul'           => $judul,
                'nama_lengkap'    => $nama_lengkap,
                'kelas'           => $kelas,
                'keterangan'      => $keterangan,
                'tahun'           => $tahun,
                'foto_karya' => $foto,
            );

            $d = $this->m->Save($data, 'tbl_karya');
            // var_dump($d);
            // die;
            redirect('Admin/input_product');
        }
        redirect('Admin/input_product');
    }

    public function id_work()
    {
        $this->sidebar();
        $data = array(
            'input_product' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Dokumentasi";

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_karya', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/id_work', $data);
        $this->load->view('include/footer');
    }

    public function edit_work()
    {
        $this->sidebar();
        $data = array(
            'input_product' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Work";

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_karya', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/edit_work', $data);
        $this->load->view('include/footer');
    }

    public function actedit_work()
    {
        $config['upload_path']          = './foto/karya/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10000; //set max size allowed in Kilobyte

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_karya')) //upload and validate
        {
            $title = $this->input->post('title', TRUE);
            $nama_lengkap = $this->input->post('name', TRUE);
            $kelas = $this->input->post('class', TRUE);
            $description = $this->input->post('description', TRUE);
            $year = $this->input->post('year', TRUE);
            $where = array(
                'id' => $this->input->post('id'),
            );
            $data = array(
                'judul'          => $title,
                'nama_lengkap'          => $nama_lengkap,
                'kelas'          => $kelas,
                'keterangan'          => $description,
                'tahun'          => $year,
            );
            $this->m->Update($where, $data, 'tbl_karya');
            redirect('Admin/dok');
        } else {

            $foto                  = $this->upload->data();
            $foto                  = $foto['file_name'];
            $title = $this->input->post('title', TRUE);
            $nama_lengkap = $this->input->post('name', TRUE);
            $kelas = $this->input->post('class', TRUE);
            $description = $this->input->post('description', TRUE);
            $year = $this->input->post('year', TRUE);
            $where = array(
                'id' => $this->input->post('id'),
            );

            $data = array(
                'judul'          => $title,
                'nama_lengkap'          => $nama_lengkap,
                'kelas'          => $kelas,
                'keterangan'          => $description,
                'tahun'          => $year,
                'foto_karya'          => $foto,
            );

            unlink(FCPATH . './foto/karya/' . $this->input->post('foto_lama'));

            $d = $this->m->Update($where, $data, 'tbl_karya');
            redirect('Admin/input_product');
        }

        redirect('Admin/input_product');
    }

    public function acthapus_work()
    {
        $where = array(
            'id' => $this->input->post('id'),
        );

        unlink(FCPATH . './foto/karya/' . $this->input->post('foto_karya'));

        $this->m->Delete($where, 'tbl_karya');
        redirect('Admin/input_product');
    }

    public function vport()
    {
        $this->sidebar();
        $data = array(
			'vport' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Video Portrait";

        $select = $this->db->select('*');
        // $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_vportrait', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/vport', $data);
        $this->load->view('include/footer');
    }

    public function input_vport()
    {
        $this->sidebar();
        $data = array(
			'vport' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Video Portrait";

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/input_vport', $data);
        $this->load->view('include/footer');
    }

    public function actinput_vport()
    {
        $judul = $this->input->post('title', TRUE);
        $nama_lengkap = $this->input->post('name', TRUE);
        $kelas = $this->input->post('class', TRUE);
        $keterangan = $this->input->post('description', TRUE);
        $tahun = $this->input->post('year', TRUE);
        $link = $this->input->post('link', TRUE);

        $data = array(
            'judul'           => $judul,
            'nama_lengkap'    => $nama_lengkap,
            'kelas'           => $kelas,
            'keterangan'      => $keterangan,
            'tahun'           => $tahun,
            'link' => $link,
        );

        $d = $this->m->Save($data, 'tbl_vportrait');
        // var_dump($d);
        // die;
        redirect('Admin/vport');
    }

    public function id_vport()
    {
        $this->sidebar();
        $data = array(
			'vport' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Video Portrait";

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_vportrait', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/id_vport', $data);
        $this->load->view('include/footer');
    }

    public function edit_vport()
    {
        $this->sidebar();
        $data = array(
			'vport' => " active",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Video Portrait";

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_vportrait', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/edit_vport', $data);
        $this->load->view('include/footer');
    }

    public function actedit_vport()
    {
        $where = array(
            'id' => $this->input->post('id')
        );

        $data = array(
            'judul' => $this->input->post('title'),
            'nama_lengkap' => $this->input->post('name'),
            'kelas' => $this->input->post('class'),
            'tahun' => $this->input->post('year'),
            'keterangan' => $this->input->post('description'),
            'link' => $this->input->post('link'),
        );

        $this->m->Update($where, $data, 'tbl_vportrait');
        redirect('Admin/vport');
    }

    public function acthapus_vport()
    {
        $where = array(
            'id' => $this->input->post('id'),
        );

        $this->m->Delete($where, 'tbl_vportrait');
        redirect('Admin/vport');
    }

    public function vland()
    {
        $this->sidebar();
        $data = array(
            'video' => "open",
			'video_st' => " active",
			'vlan' => " active",
			'vlan_dot' => "dot-",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Video Landscape";

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_vlandscape', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/vland', $data);
        $this->load->view('include/footer');
    }

    public function input_vland()
    {
        $this->sidebar();
        $data = array(
            'video' => "open",
			'video_st' => " active",
			'vlan' => " active",
			'vlan_dot' => "dot-",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Video Landscape";

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_vlandscape', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/input_vland', $data);
        $this->load->view('include/footer');
    }

    public function actinput_vland()
    {
        $judul = $this->input->post('title', TRUE);
        $nama_lengkap = $this->input->post('name', TRUE);
        $kelas = $this->input->post('class', TRUE);
        $keterangan = $this->input->post('description', TRUE);
        $tahun = $this->input->post('year', TRUE);
        $link = $this->input->post('link', TRUE);

        $data = array(
            'judul'           => $judul,
            'nama_lengkap'    => $nama_lengkap,
            'kelas'           => $kelas,
            'keterangan'      => $keterangan,
            'tahun'           => $tahun,
            'link' => $link,
        );

        $d = $this->m->Save($data, 'tbl_vlandscape');
        // var_dump($d);
        // die;
        redirect('Admin/vland');
    }

    public function id_vland()
    {
        $this->sidebar();
        $data = array(
            'video' => "open",
			'video_st' => " active",
			'vlan' => " active",
			'vlan_dot' => "dot-",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Video Landscape";

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_vlandscape', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/id_vland', $data);
        $this->load->view('include/footer');
    }

    public function edit_vland()
    {
        $this->sidebar();
        $data = array(
            'video' => "open",
			'video_st' => " active",
			'vlan' => " active",
			'vlan_dot' => "dot-",
        );
        $this->session->set_userdata($data);
        $data['title'] = "Video Landscape";

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_vlandscape', $select);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/edit_vland', $data);
        $this->load->view('include/footer');
    }

    public function actedit_vland()
    {
        $where = array(
            'id' => $this->input->post('id')
        );

        $data = array(
            'judul' => $this->input->post('title'),
            'nama_lengkap' => $this->input->post('name'),
            'kelas' => $this->input->post('class'),
            'tahun' => $this->input->post('year'),
            'keterangan' => $this->input->post('description'),
            'link' => $this->input->post('link'),
        );

        $this->m->Update($where, $data, 'tbl_vlandscape');
        redirect('Admin/vland');
    }

    public function acthapus_vland()
    {
        $where = array(
            'id' => $this->input->post('id'),
        );

        $this->m->Delete($where, 'tbl_vlandscape');
        redirect('Admin/vland');
    }
    
    public function manual_book()
    {
        $this->sidebar();
        $data = array(
            'manualbook' => " active",
        );
        $this->session->set_userdata($data);

        $this->load->view('include/head');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('admin/manual_book', $data);
        $this->load->view('include/footer');
    }

    // public function product()
    // {
    //     $this->sidebar();
    //     $data = array(
    //         'product_status' => " active",
    //     );
    //     $this->session->set_userdata($data);

    //     $this->load->view('include/head');
    //     // $this->load->view('include/navbar');
    //     $this->load->view('include/nav');
    //     // $this->load->view('include/sidebar');
    //     $this->load->view('admin/product', $data);
    //     // $this->load->view('include/foot');
    //     // $this->load->view('include/footer');
    // }

    // public function documentation()
    // {
    //     $this->sidebar();
    //     $data = array(
    //         'product_status' => " active",
    //         'document' => " active",
    //     );
    //     $this->session->set_userdata($data);

    //     $this->load->view('include/head');
    //     // $this->load->view('include/navbar');
    //     // $this->load->view('include/nav');
    //     $this->load->view('include/tambahan');

    //     $this->load->view('include/sidebar');
    //     $this->load->view('admin/dokumentasi', $data);
    //     // $this->load->view('include/foot');
    //     // $this->load->view('include/footer');
    // }
}
