<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Savings extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load model yang diperlukan
        $this->load->model('savings_model');
    }

    public function index()
    {
        // Ambil user ID dari session (anda bisa menggunakan user ID sesuai aplikasi anda)
        $user_id = $this->session->userdata('id');

        // Analisis pola tabungan saat ini (misalnya, dengan menggunakan model 'savings_model')
        $current_savings = $this->savings_model->get_current_savings($user_id);
        $average_savings_per_month = $this->savings_model->get_average_savings_per_month($user_id);

        // Tentukan periode proyeksi (misalnya, 3 bulan mendatang)
        $projection_period = 3;

        // Hitung proyeksi tabungan
        $projected_savings = $current_savings + ($average_savings_per_month * $projection_period);

        // Tampilkan hasil proyeksi tabungan
        $data['current_savings'] = $current_savings;
        $data['average_savings_per_month'] = $average_savings_per_month;
        $data['projection_period'] = $projection_period;
        $data['projected_savings'] = $projected_savings;


        $data['title'] = 'Proyeksi Tabungan';
        $this->load->view('tamplates/header', $data);
        $this->load->view('savings_projection_view', $data);
        $this->load->view('tamplates/footer');
    }

    public function show_savings_page()
    {
        $user_id = $this->session->userdata('id');

        if ($this->savings_model->is_balance_near_minimum($user_id)) {
            // Tampilkan peringatan untuk pengguna
            $data['warning_message'] = "Saldo tabungan Anda mendekati atau mencapai batas minimum yang telah ditentukan.";
        } else {
            $data['warning_message'] = null;
        }

        // Load tampilan halaman tabungan

        $data['title'] = 'Peringatan Batas Saldo Minimum';
        $this->load->view('tamplates/header', $data);
        $this->load->view('savings_view', $data);
        $this->load->view('tamplates/footer');
    }

    public function add_auto_savings($user_id)
    {
        $this->savings_model->add_auto_savings($user_id);
    }
}
