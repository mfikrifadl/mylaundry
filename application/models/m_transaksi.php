<?php
class m_transaksi extends CI_Model
{

    public function get_transaksi()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM transaksi");
        return $query->result();
    }

    public function tambahTransaksi()
    {
        $id_cabang = $_POST['id_cabang2'];
        $id_customer = $_POST['id_customer'];
        $status = $_POST['status'];
        $tgltrans = $_POST['tgltrans'];
	$tipelaundry = $_POST['tipelaundry'];
	$harga = $_POST['harga'];

        $this->load->database();
        $query = $this->db->query("INSERT INTO transaksi (id_customer, id_cabang , tanggal, status, tipelaundry, harga ) VALUES ('$id_customer', '$id_cabang', '$tgltrans', '$status', '$tipelaundry', '$harga')");
        if ($query) {
            return true;
        }
    }
    public function penyelesaian($idtrans)
    {

        $this->load->database();
        $query = $this->db->query("UPDATE transaksi SET status = 1 WHERE id_transaksi = '$idtrans'");
        if ($query) {
            return true;
        }
    }
    public function hapusTrans($id_trans)
    {
        $this->load->database();
        $query = $this->db->query("DELETE FROM transaksi WHERE id_transaksi = '$id_trans'");
        if ($query) {
            return true;
        }
    }
}
