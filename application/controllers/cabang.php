<?php
class cabang extends CI_Controller
{
    public function listcabang()
    {
        $this->load->helper('url');
        $this->load->model('m_cabang');
        $dt_cabang = $this->m_cabang->get_cabang();
        $data['cabang'] = $dt_cabang;
        $this->load->view('header', $data);
        $this->load->view('cabang/v_cabang', $data);
    }
    public function addcabang()
    {
        $this->load->helper('url');
        if (!empty($_POST)) {
            $this->load->model('m_cabang');
            if ($this->m_cabang->tambahcabang($_POST)) {
                redirect('cabang/listcabang', 'refresh');
                exit;
            }
        } else {
            $this->load->view('header');
            $this->load->view('cabang/v_addcabang');
        }
    }
    public function delcabang()
    {
        $this->load->helper('url');
        $this->load->model('m_cabang');
        $idcabang = $_POST['id_cabang'];
        if ($this->m_cabang->hapuscabang($idcabang)) {
            redirect('cabang/listcabang', 'refresh');
            exit;
        }
    }
    public function updatecabang()
    {
        //LOAD DATA 1 cabang
        $this->load->model('m_cabang');
        if (!empty($_POST['id_cabang'])) {
            $bookup = $_POST['id_cabang'];
            // echo $npup;
            $this->load->helper('url');
            $dt_cabangOne = $this->m_cabang->get_cabangOne($bookup);

            $data['cabangone'] = $dt_cabangOne;
            $this->load->view('header');
            $this->load->view('cabang/v_upcabang', $data);
        }
        if (!empty($_POST['id_cabang2'])) {
            if ($this->m_cabang->perbarucabang($_POST)) {
                redirect('cabang/listcabang', 'refresh');
                exit;
            }
        }
    }
}
