<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visitor extends CI_Controller
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
            'documentation' => "",
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
            // 'documentation' => " active",
        );
        $this->session->set_userdata($data);

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_dokumentasi', $select);

        // $this->load->view('includes/head');
        // $this->load->view('includes/navbar');
        // $this->load->view('visitor/documentation', $data);
        $this->load->view('visitor/home', $data);
        // $this->load->view('includes/footer');
    }

    public function documentation()
    {
        $this->sidebar();
        $data = array(
            'documentation' => " active",
        );
        $this->session->set_userdata($data);

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_dokumentasi', $select);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/documentation', $data);
        $this->load->view('includes/footer');
    }

    public function ket_dokumentasi()
    {
        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_dokumentasi', $select);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/ket_dokumentasi', $data);
        $this->load->view('includes/footer');
    }

    public function work()
    {
        $this->sidebar();
        $data = array(
            'work' => " active",
        );
        $this->session->set_userdata($data);

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_karya', $select);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/work', $data);
        $this->load->view('includes/footer');
    }

    public function ket_work()
    {
        $this->sidebar();
        $data = array(
            'work' => " active",
        );
        $this->session->set_userdata($data);

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_karya', $select);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/ket_work', $data);
        $this->load->view('includes/footer');
    }

    public function vport()
    {
        $this->sidebar();
        $data = array(
            'vport' => " active",
        );
        $this->session->set_userdata($data);

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_vportrait', $select);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/vport', $data);
        $this->load->view('includes/footer');
    }

    public function ket_vport()
    {
        $this->sidebar();
        $data = array(
            'vport' => " active",
        );
        $this->session->set_userdata($data);

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_vportrait', $select);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/ket_vport', $data);
        $this->load->view('includes/footer');
    }

    public function vlan()
    {
        $this->sidebar();
        $data = array(
            'vlan' => " active",
        );
        $this->session->set_userdata($data);

        $select = $this->db->select('*');
        $data['read'] = $this->m->Get_All('tbl_vlandscape', $select);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/vlan', $data);
        $this->load->view('includes/footer');
    }

    public function ket_vlan()
    {
        $this->sidebar();
        $data = array(
            'vlan' => " active",
        );
        $this->session->set_userdata($data);

        $select = $this->db->select('*');
        $select = $this->db->where('id', $_GET['id']);
        $data['read'] = $this->m->Get_All('tbl_vlandscape', $select);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/ket_vlan', $data);
        $this->load->view('includes/footer');
    }
    
    public function manual_book()
    {
        $this->sidebar();
        $data = array(
            'manualbook' => " active",
        );
        $this->session->set_userdata($data);

        $this->load->view('includes/head');
        $this->load->view('includes/navbar');
        $this->load->view('visitor/manual_book', $data);
        $this->load->view('includes/footer');
    }

}
