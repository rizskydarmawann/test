<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang diperlukan
        $this->load->model('transaction_model');
    }

    public function index() {
        // Ambil user ID dari session (anda bisa menggunakan user ID sesuai aplikasi anda)
        $user_id = $this->session->userdata('id');

        // Ambil data histori transaksi
        $data['transactions'] = $this->transaction_model->get_transaction_history($user_id);

        // Tampilkan halaman dengan histori transaksi
        
        $data['title'] = 'History';
        $this->load->view('tamplates/header', $data);
        $this->load->view('transaction_history', $data);
        $this->load->view('tamplates/footer');
    }
}
