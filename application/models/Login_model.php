<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    function admin()
    {
        return $this->db->get('tbl_admin')->result();
    }
    function hapusadmin($id)
    {
        $this->db->delete('tbl_admin', array('id_admin' => $id));
    }
    function simpan_admin()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'email' => $email,
            'password' => $password
        );
        $this->db->insert('tbl_admin', $data);
    }
    function konsumen()
    {
        return $this->db->get('tbl_konsumen')->result();
    }
    function hapuskonsumen($id)
    {
        $this->db->delete('tbl_konsumen', array('id_konsumen' => $id));
    }
    function simpan_konsumen()
    {
        $nama = $this->input->post('nama_stnk');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $pajak_progresif = $this->input->post('pajak_progresif');
        $data = array(
            'nama_stnk' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'pajak_progresif' => $pajak_progresif
        );
        $this->db->insert('tbl_konsumen', $data);
    }
    function pengambilan()
    {
        return $this->db->get('tbl_pengambilan')->result();
    }
    function hapuspengambil($id)
    {
        $this->db->delete('tbl_pengambilan', array('id_pengambil' => $id));
    }
    function simpan_pengambilan()
    {
        $nama_stnk= $this->input->post('nama_stnk');
        $no_mesin = $this->input->post('no_mesin');
        $no_polisi = $this->input->post('no_polisi');
        $pajak_progresif = $this->input->post('pajak_progresif');
        $nama_pengambil = $this->input->post('nama_pengambil');
        $tanggal_pengambilan = $this->input->post('tanggal_pengambilan');
        $data = array(
            'nama_stnk' => $nama_stnk,
            'no_mesin' => $no_mesin,
            'no_polisi' => $no_polisi,
            'pajak_progresif' => $pajak_progresif,
            'nama_pengambil' => $nama_pengambil,
            'tanggal_pengambilan' => $tanggal_pengambilan
        );
        $this->db->insert('tbl_pengambilan', $data);
    }

     function edit_admin($id_admin)
    {
        return $this->db->get_where('tbl_admin', array('id_admin'=>$id_admin))->result();
        
    }
    
    function simpan_editadmin()
    {
        $id_admin = $this->input->post('id_admin');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'email' => $email,
            'password' => $password
        );
        $this->db->where('id_admin', $id_admin);
        $this->db->update('tbl_admin', $data);
    }
    function edit_konsumen($id_konsumen)
    {
        return $this->db->get_where('tbl_konsumen', array('id_konsumen'=>$id_konsumen))->result();
        
    }
    
    function simpan_editkonsumen()
    {
        $id_konsumen = $this->input->post('id_konsumen');
        $nama = $this->input->post('nama_stnk');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $pajak_progresif = $this->input->post('pajak_progresif');
        $data = array(
            'nama_stnk' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'pajak_progresif' => $pajak_progresif
        );
        $this->db->where('id_konsumen', $id_konsumen);
        $this->db->update('tbl_konsumen', $data);
    }
    function edit_pengambilan($id_pengambil)
    {
        return $this->db->get_where('tbl_pengambilan', array('id_pengambil'=>$id_pengambil))->result();
        
    }
    
    function simpan_editpengambilan()
    {
        $id_pengambil = $this->input->post('id_pengambil');
        $nama_stnk= $this->input->post('nama_stnk');
        $no_mesin = $this->input->post('no_mesin');
        $no_polisi = $this->input->post('no_polisi');
        $pajak_progresif = $this->input->post('pajak_progresif');
        $nama_pengambil = $this->input->post('nama_pengambil');
        $tanggal_pengambilan = $this->input->post('tanggal_pengambilan');
        $data = array(
            'nama_stnk' => $nama_stnk,
            'no_mesin' => $no_mesin,
            'no_polisi' => $no_polisi,
            'pajak_progresif' => $pajak_progresif,
            'nama_pengambil' => $nama_pengambil,
            'tanggal_pengambilan' => $tanggal_pengambilan
        );
        $this->db->where('id_pengambil', $id_pengambil);
        $this->db->update('tbl_pengambilan', $data);
    }

    function print($id_pengambil)
    {
        return $this->db->get_where('tbl_pengambilan', array('id_pengambil'=> $id_pengambil))->result();   
    }
}