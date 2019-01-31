<?php
class mlain extends CI_Model{

   function data_list(){
    $hasil = $this->db->query("SELECT * FROM lain");
    return $hasil;
}

function update_data($telp,$fax,$email,$web){

    $hasil = $this->db->query("UPDATE lain SET telp='$telp',fax='$fax',email='$email',web='$web'");
    return $hasil;
}

}