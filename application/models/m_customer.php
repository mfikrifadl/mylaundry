<?php
class m_customer extends CI_Model
{
    public function get_customer()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM customer");
        return $query->result();
    }
    public function get_customerOne($npup)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM customer WHERE nohpcustomer = '$npup'");
        return $query->result();
    }
    public function tambahcustomer()
    {
        $namacustomer = $_POST['namacustomer'];
        $nohpcustomer = $_POST['nohpcustomer'];
        $tglanggota = $_POST['tanggalselesai'];
        $status = $_POST['status'];
        $namafile = $_FILES['foto']['name'];
        $target_path = 'C:/xampp/htdocs/laundry/assets/upload/';
        $target_path = "$target_path" . "$namafile";
        // echo $target_path;
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);
        $this->load->database();
        $query = $this->db->query("INSERT INTO customer (nohpcustomer, nama , tanggalselesai, foto, status) VALUES ('$nohpcustomer', '$namacustomer','$tglanggota',  '$namafile','$status')");
        if ($query) {
            return true;
        }
    }
    public function hapuscustomer($np)
    {
        $this->load->database();
        $query = $this->db->query("DELETE FROM customer WHERE nohpcustomer = '$np'");
        if ($query) {
            return true;
        }
    }
    public function perbarucustomer()
    {
        $nohpcustomerreal = $_POST['nohpcustomerreal'];
        $namaup = $_POST['namacustomer'];
        $nohpcustomer2 = $_POST['nohpcustomer2'];
        $tglup = $_POST['tanggalselesai'];
        $statusup = $_POST['status'];
        $namafileup = $_FILES['foto']['name'];
        $target_pathup = 'C:/xampp/htdocs/laundry/assets/upload/';
        $target_pathup = "$target_pathup" . "$namafileup";
        // echo $target_path;
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_pathup);
        $this->load->database();
        $query = $this->db->query("UPDATE customer SET nohpcustomer = '$nohpcustomer2', nama = '$namaup', tanggalselesai = '$tglup', foto = '$namafileup', status = '$statusup' WHERE nohpcustomer = '$nohpcustomerreal'");
        if ($query) {
            return true;
        }
    }
}
