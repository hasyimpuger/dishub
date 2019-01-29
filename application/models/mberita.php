<?php
class mberita extends CI_Model{
 
 function berita_list(){
        $hasil = $this->db->query("SELECT * FROM berita");
        return $hasil;
    }
 
    function simpan_berita($id,$jdl,$konten,$gambar,$iduser){
        $hasil = $this->db->query("INSERT INTO berita (id,judul,konten,tanggal_post,gambar,id_user)VALUES('$id','$jdl','$konten','".date('Y-m-d')."','$gambar','$iduser')");
        return $hasil;
    }
 
    function get_berita_by_kode($id){
        $hsl = $this->db->query("SELECT * FROM berita WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id'           => $data->id,
                    'judul'        => $data->judul,
                    'konten'       => $data->konten,
                    'tanggal_post' => $data->tanggal_post,
                    'gambar'       => $data->gambar,
                    'id_user'      => $data->id_user,
                    );
            }
        }
        return $hasil;
    }
 
    function update_berita($id,$jdl,$konten,$gambar,$iduser){
        $hasil = $this->db->query("UPDATE berita SET judul='$jdl',konten='$konten',tanggal_post='".date('Y-m-d')."',gambar='$gambar',id_user='$iduser' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_berita($id){
        $hasil = $this->db->query("DELETE FROM berita WHERE id='$id'");
        return $hasil;
    }
}