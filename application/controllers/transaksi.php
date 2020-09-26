<?php
class transaksi extends CI_Controller
{
    public function listTransaksi()
    {
        $this->load->helper('url');
        $this->load->model('m_transaksi');

        $dt_transaksi = $this->m_transaksi->get_transaksi();

        $data['trans'] = $dt_transaksi;

        $this->load->view('header', $data);
        $this->load->view('transaksi/v_Transaksi', $data);
    }

    public function addTransaksi()
    {
        $this->load->helper('url');
        if (!empty($_POST['id_cabang'])) {

            $this->load->model('m_customer');
            $dt_customer = $this->m_customer->get_customer();
            $data['customer'] = $dt_customer;
            $data['cabangs'] = $_POST['id_cabang'];

            $this->load->view('header');
            $this->load->view('transaksi/v_addTransaksi', $data);
        }
        if (!empty($_POST['id_cabang2'])) {

            $this->load->model('m_transaksi');
            if ($this->m_transaksi->tambahTransaksi()) {
                redirect('cabang/listcabang', 'refresh');
            }
        }
    }


    public function delTrans()
    {
        $this->load->helper('url');
        $this->load->model('m_transaksi');
        $idtransd = $_POST['id_transaksi'];
        if ($this->m_transaksi->hapusTrans($idtransd)) {
            redirect('transaksi/listTransaksi', 'refresh');
            exit;
        }
    }

    public function kembalikancabang()
    {
        //LOAD DATA 1 cabang
        $this->load->helper('url');
        $this->load->model('m_transaksi');
        echo $_POST['id_transaksi'];
        if (isset($_POST['id_transaksi'])) {
            $idtrans = $_POST['id_transaksi'];
            if ($this->m_transaksi->penyelesaian($idtrans)) {
                redirect('transaksi/listTransaksi', 'refresh');
                exit;
            }
        }
    }
}
