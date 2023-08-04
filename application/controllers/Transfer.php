<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model dan library yang diperlukan
        $this->load->model('transfer_model');
    }

    public function index() {
        // Tampilkan halaman dengan formulir transfer

        $data['title'] = 'Transfer';
        $this->load->view('tamplates/header', $data);
        $this->load->view('transfer_form', $data);
        $this->load->view('tamplates/footer');
    }

    public function do_transfer() {
        // Ambil data dari formulir
        $sender_id = $this->session->userdata('id');
        $receiver_id = $this->input->post('receiver_id');
        $amount = $this->input->post('amount');

        // Lakukan validasi data jika diperlukan

        // Proses transfer
        $result = $this->transfer_model->process_transfer($sender_id, $receiver_id, $amount);

        if ($result) {
            // Berhasil melakukan transfer, lakukan tindakan selanjutnya
            redirect('transfer/success');
        } else {
            // Gagal melakukan transfer, berikan pesan error
            $data['error_message'] = "Gagal melakukan transfer.";
            $data['title'] = 'Transfer';
            $this->load->view('tamplates/header', $data);
            $this->load->view('transfer_form', $data);
            $this->load->view('tamplates/footer');
        }
    }

    public function success() {
        // Tampilkan halaman sukses transfer
        $data['title'] = 'Transfer';
        $this->load->view('tamplates/header', $data);
        $this->load->view('transfer_success', $data);
        $this->load->view('tamplates/footer');
    }
}
