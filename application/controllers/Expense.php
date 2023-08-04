<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Expense extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load model yang diperlukan
        $this->load->model('expense_model');
        $this->load->model('transaction_model');
        $this->load->model('expense_category_model');
    }

    public function index()
    {
        // Ambil user ID dari session (anda bisa menggunakan user ID sesuai aplikasi anda)
        $user_id = $this->session->userdata('id');

        // Ambil bulan dan tahun dari request (jika disertakan), jika tidak, gunakan bulan dan tahun saat ini
        $selected_month = $this->input->get('month') ? $this->input->get('month') : date('m');
        $selected_year = $this->input->get('year') ? $this->input->get('year') : date('Y');

        // Ambil tanggal awal dan akhir periode (bulan tertentu)
        $start_date = $selected_year . '-' . $selected_month . '-01';
        $end_date = $selected_year . '-' . $selected_month . '-31';

        // Ambil data pengeluaran dalam periode yang ditentukan
        $data['expenses'] = $this->expense_model->get_expense($user_id, $start_date, $end_date);

        // Tambahkan bulan dan tahun yang dipilih untuk digunakan dalam tampilan
        $data['selected_month'] = $selected_month;
        $data['selected_year'] = $selected_year;
        // var_dump($data['expenses']);die;

        $data['title'] = 'Rekapitulasi Pengeluaran';
        $this->load->view('tamplates/header', $data);
        $this->load->view('expense_summary', $data);
        $this->load->view('tamplates/footer');
    }

    public function manage_categories()
    {
        // Ambil daftar kategori pengeluaran
        $data['categories'] = $this->expense_category_model->get_all_categories();

        $data['title'] = 'Kategori';
        $this->load->view('tamplates/header', $data);
        $this->load->view('expense_categories_view', $data);
        $this->load->view('tamplates/footer');
    }

    public function add_category()
    {
        $category_name = $this->input->post('category_name');
        $this->expense_category_model->add_category($category_name);
        redirect('expense/manage_categories');
    }

    public function edit_category($category_id)
    {
        $category_name = $this->input->post('category_name');
        $this->expense_category_model->edit_category($category_id, $category_name);
        redirect('expense/manage_categories');
    }

    public function delete_category($category_id)
    {
        $this->expense_category_model->delete_category($category_id);
        redirect('expense/manage_categories');
    }
}
