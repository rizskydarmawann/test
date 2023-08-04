<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Savings_model extends CI_Model
{

    public function get_current_savings($user_id)
    {
        // Kode untuk mengambil data tabungan saat ini dari database berdasarkan user ID
        // Misalnya:
        $this->db->select('current_savings');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('savings');
        $result = $query->row_array();
        return $result['current_savings'] ?? 0;
    }

    public function get_average_savings_per_month($user_id)
    {
        // Kode untuk menghitung rata-rata tabungan per bulan dari data historis tabungan berdasarkan user ID
        // Misalnya:
        $this->db->select_avg('amount');
        $this->db->where('user_id', $user_id);
        $this->db->where('type', 'deposit');
        $query = $this->db->get('transactions');
        $result = $query->row_array();
        return $result['amount'] ?? 0;
    }

    public function is_balance_near_minimum($user_id)
    {
        $savings = $this->get_savings_by_user_id($user_id);
        return $savings['current_savings'] <= $savings['minimum_balance'];
    }

    public function get_savings_by_user_id($user_id)
    {
        $this->db->select('current_savings, minimum_balance');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('savings');
        return $query->row_array();
    }

    public function add_auto_savings($user_id)
    {
        $user = $this->get_user_by_id($user_id);
        $savings = $this->get_savings_by_user_id($user_id);

        // Hitung jumlah tabungan otomatis berdasarkan persentase dari pendapatan bulanan
        $auto_savings = $user['monthly_income'] * 0.1; // Contoh: 10% dari pendapatan bulanan

        // Tambahkan jumlah tabungan otomatis ke tabungan saat ini
        $new_savings_amount = $savings['current_savings'] + $auto_savings;

        // Update kolom auto_savings_amount dan current_savings di tabel savings
        $this->db->set('auto_savings_amount', $auto_savings);
        $this->db->set('current_savings', $new_savings_amount);
        $this->db->where('user_id', $user_id);
        $this->db->update('savings');
    }

    public function get_user_by_id($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return $query->row_array();
    }

    public function save_savings($user_id, $current_savings, $auto_savings_amount)
    {
        $data = array(
            'user_id' => $user_id,
            'current_savings' => $current_savings,
            'auto_savings_amount' => $auto_savings_amount
        );
        return $this->db->insert('savings', $data);
    }

    public function update_auto_savings_setting($user_id, $monthly_income) {
        $data = array(
            'monthly_income' => $monthly_income
        );
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);
    }
}
