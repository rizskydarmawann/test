
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense_model extends CI_Model
{

    public function add_expense($user_id, $amount, $date, $description, $category_id)
    {
        $data = array(
            'user_id' => $user_id,
            'amount' => $amount,
            'date' => $date,
            'description' => $description,
            'category_id' => $category_id
        );
        return $this->db->insert('expenses', $data);
    }

    public function get_expenses_by_user_id($user_id)
    {
        $this->db->select('expenses.*, expense_categories.category_name');
        $this->db->join('expense_categories', 'expenses.category_id = expense_categories.id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('expenses');
        return $query->result_array();
    }

    public function get_expenses_by_category($user_id, $category_id)
    {
        $this->db->select('expenses.*, expense_categories.category_name');
        $this->db->join('expense_categories', 'expenses.category_id = expense_categories.id');
        $this->db->where('user_id', $user_id);
        $this->db->where('category_id', $category_id);
        $query = $this->db->get('expenses');
        return $query->result_array();
    }

    public function edit_expense($expense_id, $amount, $date, $description, $category_id)
    {
        $data = array(
            'amount' => $amount,
            'date' => $date,
            'description' => $description,
            'category_id' => $category_id
        );
        $this->db->where('id', $expense_id);
        return $this->db->update('expenses', $data);
    }

    public function delete_expense($expense_id)
    {
        $this->db->where('id', $expense_id);
        return $this->db->delete('expenses');
    }

    public function get_total_expenses_by_user_id($user_id)
    {
        $this->db->select_sum('amount');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('expenses');
        $result = $query->row_array();
        return $result['amount'] ?? 0;
    }

    public function get_expense_categories()
    {
        $query = $this->db->get('expense_categories');
        return $query->result_array();
    }

    public function get_expense($expense_id)
    {
        $this->db->select('expenses.*, expense_categories.category_name');
        $this->db->join('expense_categories', 'expenses.category_id = expense_categories.id');
        $this->db->where('expenses.id', $expense_id);
        $query = $this->db->get('expenses');
        return $query->result_array();
    }
}
