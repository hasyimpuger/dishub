<?php
class muser extends CI_Model{
    //cek nip dan password dosen
    // function auth_dosen($username,$password){
    //     $query=$this->db->query("SELECT * FROM dosen WHERE nip='$username' AND pass=MD5('$password') LIMIT 1");
    //     return $query;
    // }
 
    //cek nim dan password mahasiswa
    function cek($username,$password){
        $query = $this->db->query("SELECT * FROM users WHERE username='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
}