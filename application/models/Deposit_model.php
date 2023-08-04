<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit_model extends CI_Model {

    public function process_deposit($user_id, $amount) {
        // Proses deposit dan simpan ke database
        $data = array(
            'user_id' => $user_id,
            'amount' => $amount
        );
        $this->db->insert('deposits', $data);

        // Beri kembalian berupa keberhasilan atau kegagalan deposit
        return $this->db->affected_rows() > 0;
    }

}
