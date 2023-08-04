<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense_category_model extends CI_Model {

    public function get_all_categories() {
        $query = $this->db->get('expense_categories');
        return $query->result_array();
    }

    public function add_category($category_name) {
        $data = array(
            'category_name' => $category_name
        );
        return $this->db->insert('expense_categories', $data);
    }

    public function edit_category($category_id, $category_name) {
        $data = array(
            'category_name' => $category_name
        );
        $this->db->where('id', $category_id);
        return $this->db->update('expense_categories', $data);
    }

    public function delete_category($category_id) {
        $this->db->where('id', $category_id);
        return $this->db->delete('expense_categories');
    }
}
