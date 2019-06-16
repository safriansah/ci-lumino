<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
		// Your own constructor code
		$this->load->model('login_model');
	}
		
	public function index()
	{
		$this->load->view('login');
	}

	public function cek()
	{
		if($this->login_model->cek_login()){
			$data=$this->login_model->get_data();
			$sesi=array(
				'username'=>$data[0]->username,
				'status'=>'login'
			);
			$this->session->set_userdata($sesi);
			echo ("<script LANGUAGE='JavaScript'>
    			window.alert('Login Berhasil');
    			window.location.href='".base_url()."welcome';
    		</script>");
		}
		else{
			echo ("<script LANGUAGE='JavaScript'>
    			window.alert('Login gagal');
    			window.location.href='".base_url()."login';
    		</script>");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('index.php');
	}
}
