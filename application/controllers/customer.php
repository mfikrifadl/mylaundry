<?php

class customer extends CI_Controller
{
    public function listcustomer()
    {
        $this->load->helper('url');
        $this->load->model('m_customer');
        $dt_customer = $this->m_customer->get_customer();
        $data['customer'] = $dt_customer;
        $this->load->view('header', $data);
        $this->load->view('customer/v_customer', $data);
    }
    public function addcustomer()
    {
        $this->load->helper('url');
        if (!empty($_POST)) {
            $this->load->model('m_customer');
            if ($this->m_customer->tambahcustomer($_POST)) {
                redirect('customer/listcustomer', 'refresh');
                exit;
            }
        } else {
            $this->load->view('header');
            $this->load->view('customer/v_addcustomer');
        }
    }
    public function delcustomer()
    {
        $this->load->helper('url');
        $this->load->model('m_customer');
        $np = $_POST['nohpcustomer'];
        if ($this->m_customer->hapuscustomer($np)) {
            redirect('customer/listcustomer', 'refresh');
            exit;
        }
    }
    public function updatecustomer()
    {
        //LOAD DATA 1 customer
        $this->load->model('m_customer');
        if (!empty($_POST['nohpcustomer'])) {
            $npup = $_POST['nohpcustomer'];
            // echo $npup;
            $this->load->helper('url');
            $dt_customerOne = $this->m_customer->get_customerOne($npup);

            $data['customerone'] = $dt_customerOne;
            $this->load->view('header');
            $this->load->view('customer/v_upcustomer', $data);
        }
        if (!empty($_POST['nopengguna2'])) {

            if ($this->m_customer->perbarucustomer($_POST)) {
                redirect('customer/listcustomer', 'refresh');
                exit;
            }
        }
    }
}
