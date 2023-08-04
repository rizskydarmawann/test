<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang diperlukan
        $this->load->model('transaction_model');
    }

    public function index() {
        // Ambil user ID dari session (anda bisa menggunakan user ID sesuai aplikasi anda)
        $user_id = $this->session->userdata('id');

        // Ambil data transaksi pada bulan ini
        $data['transactions'] = $this->transaction_model->get_transactions_by_month($user_id, date('Y'), date('m'));

        // Tampilkan halaman dengan grafik

        $data['title'] = 'Ggraph';
        $this->load->view('tamplates/header', $data);
        $this->load->view('graph', $data);
        $this->load->view('tamplates/footer');
    }
}
