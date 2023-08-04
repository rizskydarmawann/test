<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summary extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang diperlukan
        $this->load->model('transaction_model');
    }

    public function index() {
        // Ambil user ID dari session (anda bisa menggunakan user ID sesuai aplikasi anda)
        $user_id = $this->session->userdata('id');

        // Ambil bulan dan tahun saat ini
        $current_month = date('m');
        $current_year = date('Y');

        // Ambil data transaksi pada bulan ini
        $data['transactions'] = $this->transaction_model->get_transactions_by_month($user_id, $current_year, $current_month);

        // Tampilkan halaman dengan ringkasan saldo bulanan

        $data['title'] = 'Ringkasan Saldo';
        $this->load->view('tamplates/header', $data);
        $this->load->view('monthly_summary', $data);
        $this->load->view('tamplates/footer');
    }
}
