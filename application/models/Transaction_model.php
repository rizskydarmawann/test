<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model {

    public function get_transactions_by_month($user_id, $year, $month) {
        // Ambil transaksi tabungan pada bulan yang diberikan (misalnya Januari 2023)
        $this->db->select_sum('amount');
        $this->db->where('user_id', $user_id);
        $this->db->where('YEAR(date)', $year);
        $this->db->where('MONTH(date)', $month);
        $deposit_query = $this->db->get('deposits');
        $total_deposit = $deposit_query->row()->amount;

        $this->db->select_sum('amount');
        $this->db->where('user_id', $user_id);
        $this->db->where('YEAR(date)', $year);
        $this->db->where('MONTH(date)', $month);
        $withdraw_query = $this->db->get('withdrawals');
        $total_withdraw = $withdraw_query->row()->amount;

        return array(
            'total_deposit' => $total_deposit,
            'total_withdraw' => $total_withdraw
        );
    }


    public function get_transaction_history($user_id) {
        // Ambil data deposit
        $this->db->select('id, user_id, amount, date, "deposit" AS type');
        $this->db->where('user_id', $user_id);
        $this->db->from('deposits');
        $deposit_query = $this->db->get()->result_array();

        // Ambil data penarikan
        $this->db->select('id, user_id, amount, date, "withdraw" AS type');
        $this->db->where('user_id', $user_id);
        $this->db->from('withdrawals');
        $withdraw_query = $this->db->get()->result_array();

        // Gabungkan data deposit dan penarikan
        $transactions = array_merge($deposit_query, $withdraw_query);

        // Urutkan data berdasarkan tanggal secara descending
        usort($transactions, function($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return $transactions;

    }

    

}
