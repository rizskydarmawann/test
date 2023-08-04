<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deposits extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load model dan library yang diperlukan
        $this->load->model('deposit_model');
    }

    public function index()
    {
        // Tampilkan halaman dengan formulir deposit
        $data['title'] = 'Deposit';
        $this->load->view('tamplates/header', $data);
        $this->load->view('deposit_form', $data);
        $this->load->view('tamplates/footer');
    }

    public function do_deposit()
    {
        // Ambil data dari formulir
        $user_id = $this->session->userdata('id');
        $amount = $this->input->post('amount');

        // Lakukan validasi data jika diperlukan

        // Proses deposit
        $result = $this->deposit_model->process_deposit($user_id, $amount);

        if ($result) {
            // Berhasil melakukan deposit, lakukan tindakan selanjutnya
            redirect('deposits/success');
        } else {
            // Gagal melakukan deposit, berikan pesan error
            $data['error_message'] = "Gagal melakukan deposit.";
            $data['title'] = 'Deposit';
            $this->load->view('tamplates/header', $data);
            $this->load->view('deposit_form', $data);
            $this->load->view('tamplates/footer');
        }
    }

    public function success()
    {
        // Tampilkan halaman sukses deposit
        
        $data['title'] = 'Deposit';
        $this->load->view('tamplates/header', $data);
        $this->load->view('deposit_success');
        $this->load->view('tamplates/footer');
    }
}
