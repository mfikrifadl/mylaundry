<?php
class grafik extends CI_Controller {

	public function listgrafik()
	{
        $this->load->model('m_grafik');
		$data['graph'] = $this->m_grafik->graph();
		$this->load->view('v_grafik', $data);
	}
 
}