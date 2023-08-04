<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer_model extends CI_Model {

    public function process_transfer($sender_id, $receiver_id, $amount) {
        // Proses transfer dan simpan ke database
        $data = array(
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'amount' => $amount
        );
        $this->db->insert('transfers', $data);

        // Beri kembalian berupa keberhasilan atau kegagalan transfer
        return $this->db->affected_rows() > 0;
    }

}
