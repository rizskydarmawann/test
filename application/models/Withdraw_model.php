<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraw_model extends CI_Model {

    public function process_withdraw($user_id, $amount) {
        // Proses withdraw dan simpan ke database
        $data = array(
            'user_id' => $user_id,
            'amount' => $amount
        );
        $this->db->insert('withdrawals', $data);

        // Beri kembalian berupa keberhasilan atau kegagalan withdraw
        return $this->db->affected_rows() > 0;
    }

}
