<?php

function is_logged_in()
{

    
    //untuk memanggil perintah ci di helper php dengan instance 
    $ci = get_instance();
    if(!$ci->session->userdata('username')){
        redirect('auth');
    }else{
        $username = $ci->session->userdata('username');
        // $menu = $ci->uri->segment(1);

        // $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        // $menu_id = $queryMenu['id'];


        $userAccess = $ci->db->get_where('users', [
                                        'username' =>$username,

                                        ]);

        
                                        if($userAccess->num_rows() < 1) {
                                            redirect('auth/blocked');
                                        }
    }
}