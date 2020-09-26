<?php
// 
class m_grafik extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from transaksi");
		return $data->result();
	}
 
}