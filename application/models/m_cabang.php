<?php
class m_cabang extends CI_Model
{
    public function get_cabang()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM cabang");
        return $query->result();
    }
    public function get_cabangOne($bookup)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM cabang WHERE id_cabang = '$bookup'");
        return $query->result();
    }
    public function tambahcabang()
    {
        $namacabang = $_POST['namacabang'];
        $lokasi = $_POST['lokasi'];
        $pemilik = $_POST['pemilik'];
        $tahunterbit = $_POST['tahun'];
        $mesincuci = $_POST['mesincuci'];
        $status = $_POST['status'];
        $this->load->database();
        $query = $this->db->query("INSERT INTO cabang (nama, lokasi , pemilik, tahun, mesincuci, status) VALUES ('$namacabang', '$lokasi','$pemilik',  '$tahunterbit','$mesincuci', '$status')");
        if ($query) {
            return true;
        }
    }
    public function hapuscabang($id_cabang)
    {
        $this->load->database();
        $query = $this->db->query("DELETE FROM cabang WHERE id_cabang = '$id_cabang'");
        if ($query) {
            return true;
        }
    }
    public function perbarucabang()
    {
        // $nohpcustomerreal = $_POST['nohpcustomerreal'];
        $id_cabang2 = $_POST['id_cabang2'];
        $namaup = $_POST['namacabang'];
        $lokasiup = $_POST['lokasi'];
        $pemilikup = $_POST['pemilik'];
        $tahunterbitup = $_POST['tahun'];
        $mesincuciup = $_POST['mesincuci'];
        $statusup = $_POST['status'];
        $this->load->database();
        $query = $this->db->query("UPDATE cabang SET nama = '$namaup', lokasi = '$lokasiup', pemilik = '$pemilikup', tahun = '$tahunterbitup', mesincuci = '$mesincuciup' , status = '$statusup' WHERE id_cabang = '$id_cabang2'");
        if ($query) {
            return true;
        }
    }
}
