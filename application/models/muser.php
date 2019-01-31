<?php
class muser extends CI_Model{

    function get_user(){
        $query = $this->db->query("SELECT * FROM users");
        return $query;
    }
    function cek($username,$password){
        $query = $this->db->query("SELECT * FROM users WHERE username='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
    function update_user($username,$password,$id){
        $hasil = $this->db->query("UPDATE users SET username='$username',pass='$password' WHERE id='$id'");
        return $hasil;
    }
}