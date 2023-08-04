<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url', 'file'));
    }

    public function index()
    {

        if ($this->session->userdata('username')) {
            redirect('auth/dashboard');
        }
        $data['title'] = 'Login';
        $this->load->view('auth/login', $data);
    }

    public function proses_login()
    {
        $username = $this->input->post('nama');
        $passwords = $this->input->post('password');


        $this->load->library('session');
        // $password = md5($passwords);
        $this->load->model('user_model', 'proses_login');
        $data['log'] = $this->proses_login->login($username, $passwords);
        $cek = count($data['log']);
        if ($cek > 0) {
            $newdata = array(
                'id' => $data['log'][0]['id'],
                'username' => $data['log'][0]['username'],

            );
            $this->session->set_userdata($newdata);
            redirect(base_url() . 'auth/dashboard');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Email atau Password salah !</div></div>');
            redirect('auth');
        }
    }

    public function dashboard()
    {
        is_logged_in();
        $data = array();
        $data['title'] = 'Dashboard';
        $data['dashboard_active'] = 'active';
        $this->load->model('Admin_model', 'user');
        $data['user'] = $this->user->total_user();
        $this->load->view('tamplates/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('tamplates/footer');
    }

    // public function master_pengelola()
    // {
    //     is_logged_in();
       
    //     $data = array();
    //     $data['title'] = 'Data Pengelola';
    //     $data['master_pengelola_active'] = 'active';
    //     $this->load->model('admin_model', 'administrator');
    //     $this->load->library('pagination');
    //     if ($this->input->post('submit')) {
    //         $data['keyword'] = $this->input->post('keyword');
    //         $this->session->set_userdata('keyword', $data['keyword']);
    //     } else {
    //         $data['keyword'] = $this->session->userdata('keyword');
    //     }

    //     $this->db->like('username', $data['keyword']);
    //     $this->db->from('user');
    //     $config['base_url'] = base_url('auth/master_pengelola');
    //     $config['total_rows'] = $this->db->count_all_results();
    //     $config['per_page'] = 10;
    //     $config["num_links"]         = 1;
    //     $config['first_link']       = 'First';
    //     $config['last_link']        = 'Last';
    //     $config['next_link']        = 'Next';
    //     $config['prev_link']        = 'Prev';
    //     $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination ">';
    //     $config['full_tag_close']   = '</ul></nav></div>';
    //     $config['num_tag_open']     = '<li class="page-item">';
    //     $config['num_tag_close']    = '</li>';
    //     $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    //     $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    //     $config['next_tag_open']    = '<li class="page-item">';
    //     $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></li>';
    //     $config['prev_tag_open']    = '<li class="page-item">';
    //     $config['prev_tagl_close']  = 'Next</li>';
    //     $config['first_tag_open']   = '<li class="page-item">';
    //     $config['first_tagl_close'] = '</li>';
    //     $config['last_tag_open']    = '<li class="page-item">';
    //     $config['last_tagl_close']  = '</li>';
    //     $config['attributes'] = array('class' => 'box-paging');
    //     $this->pagination->initialize($config);
    //     $d['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    //     $data['page'] = $this->uri->segment(3);
    //     $data['pengelola'] = $this->administrator->getpengelola($d['page'], $config["per_page"], $data['keyword'])->result_array();
    //     $this->load->view('tamplates/header', $data);
    //     $this->load->view('admin/master/pengelola', $data);
    //     $this->load->view('tamplates/footer');
    // }

  





    public function logout()
    {
        // $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Anda Berhasil Logout !</div></div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
