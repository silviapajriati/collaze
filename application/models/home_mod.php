<?php
class home_mod extends CI_Model{

    function login($user, $pass) {

        // session_cache_expire(0);
        $user = $this->db->escape($user);
        $pass  = $this->db->escape($pass);
  
        return $this->db->query("SELECT * FROM user WHERE user=$user AND pass=$pass ")->result();

              
            // return $result->row_array();
    
    }

    // function get_privilege($username){

        
    //     return $this->db->query("SELECT name FROM user WHERE user='$username' ")->result();

    // }

    function cek_user($user){
        
        $user = $this->db->escape($user);
        return $this->db->query("SELECT * FROM user WHERE user=$user")->result();
    } 
}    
?>