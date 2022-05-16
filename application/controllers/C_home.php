<?php

class C_home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
	{
		$this->load->view('V_home');
	}

	public function menuutama()
	{
		$this->load->view('V_menuutama');
	}
	
    public function formpetugas()
	{
		$this->load->view('V_formpetugas');
	}
    public function formdokter()
	{
		$this->load->view('V_formdokter');
	}
    public function formRM()
	{
		$this->load->view('V_formRM');
	}
    public function formretensi()
	{
		$this->load->view('V_formretensi');
	}
	public function formlaporanRMAktif()
	{
		$this->load->view('V_formlaporanRMAktif');
	}
	public function formlaporanRMInaktif()
	{
		$this->load->view('V_formlaporanRMInaktif');
	}
}