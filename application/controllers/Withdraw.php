<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraw extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model dan library yang diperlukan
        $this->load->model('withdraw_model');
    }

    public function index() {
        // Tampilkan halaman dengan formulir withdraw
        $data['title'] = 'Deposit';
        $this->load->view('tamplates/header', $data);
        $this->load->view('withdraw_form', $data);
        $this->load->view('tamplates/footer');
    }

    public function do_withdraw() {
        // Ambil data dari formulir
        $user_id = $this->session->userdata('id');
        $amount = $this->input->post('amount');

        // Lakukan validasi data jika diperlukan

        // Proses withdraw
        $result = $this->withdraw_model->process_withdraw($user_id, $amount);

        if ($result) {
            // Berhasil melakukan withdraw, lakukan tindakan selanjutnya
            redirect('withdraw/success');
        } else {
            // Gagal melakukan withdraw, berikan pesan error
            $data['error_message'] = "Gagal melakukan withdraw.";

            $data['title'] = 'Deposit';
        $this->load->view('tamplates/header', $data);
        $this->load->view('withdraw_form', $data);
        $this->load->view('tamplates/footer');
        }
    }

    public function success() {
        // Tampilkan halaman sukses withdraw
        $data['title'] = 'Deposit';
        $this->load->view('tamplates/header', $data);
        $this->load->view('withdraw_success', $data);
        $this->load->view('tamplates/footer');
    }
}
