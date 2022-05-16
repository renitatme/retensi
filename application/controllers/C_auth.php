<?php

class C_auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
	{
        $this->load->view('V_login');
	}

    public function register()
	{
        $this->load->view('V_register');
	}

    public function SignInAksi()
    {
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'USERNAME' => $username,
			'PASSWORD' => md5($password)
			);
		$cek = $this->M_auth->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("C_home"));

		}else{
			$_SESSION['wrong'] = 'wrong';
            redirect(base_url("C_auth"));
		}
    }

    public function registerAksi()
	{
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');

        if($password != $password2)
        {
            $_SESSION['regisFail'] = 'regisFail';
            redirect(base_url("C_auth/register"));
        }else{
            $where = array(
                'USERNAME' => $username,
                'PASSWORD' => md5($password2)
                );
            $this->M_auth->register("admin",$where);
            redirect(base_url("C_auth"));
        }
	}

    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('C_auth'));
	}

}