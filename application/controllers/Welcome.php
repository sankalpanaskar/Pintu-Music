<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

		//session_start();
		// $this->load->library('pagination');
    // // load URL helper
    // $this->load->helper('url');

    $this->load->model('Login_model');
	}


	public function index()
	{
		$_SESSION['p_name']="index";
		$data['slider'] = $this->Login_model->getall_slider();
		$data['gallery'] = $this->Login_model->getall_gallery();
		$data['music'] = $this->Login_model->getall_music();
		$data['video'] = $this->Login_model->getall_video();
		$data['down'] = $this->Login_model->getall_down();
		$data['call'] = $this->Login_model->getall_caller();
		$data['social_link'] = $this->Login_model->getall_link();
		$data['event'] = $this->Login_model->getall_event();
		$data['bio'] = $this->Login_model->getall_biography();
		$this->load->view('index',$data);
	}

	public function admin_login()
	{
		$_SESSION['p_name']="admin_login";
		$this->load->view('admin/login');
	}
	public function logout()
	{
		session_unset();
		session_destroy();
		$this->load->view('admin/login');
	}
	public function dashboard()
	{
		$_SESSION['p_name']="dashboard";
		$this->load->view('admin/dashboard');
	}
	public function slider()
	{
		$_SESSION['p_name']="slider";
		$data['slider'] = $this->Login_model->getall_slider();
		$this->load->view('admin/slider',$data);
	}
	public function biography()
	{
		$_SESSION['p_name']="biography";
		$data['biography'] = $this->Login_model->getall_biography();
		$this->load->view('admin/biography',$data);
	}
	public function gallery()
	{
		$_SESSION['p_name']="gallery";
		$data['gallery'] = $this->Login_model->getall_gallery();
		$this->load->view('admin/gallery',$data);
	}
	public function music()
	{
		$_SESSION['p_name']="music";
			$data['music'] = $this->Login_model->getall_music();
			$data['caller'] = $this->Login_model->getall_caller();
			$data['provider'] = $this->Login_model->getall_provider();
			$data['down'] = $this->Login_model->getall_down();
		$this->load->view('admin/music',$data);
	}
	public function video()
	{
		$_SESSION['p_name']="video";
		$data['video'] = $this->Login_model->getall_video();
		$this->load->view('admin/video',$data);
	}

	public function social_link()
	{
		$_SESSION['p_name']="social_link";
		$data['social_link'] = $this->Login_model->getall_link();
		$this->load->view('admin/social_link',$data);
	}

	public function event()
	{
		$_SESSION['p_name']="event";
		$data['event'] = $this->Login_model->getall_event();
		$this->load->view('admin/event',$data);
	}

	// public function find_doctor()
	// {
	// 	$data['state'] = $this->Login_model->getall_state();
	// 	$data['specialization'] = $this->Login_model->getall_specialization();
	// 	$_SESSION['p_name']="find_doctor";
	// 	$this->load->view('find_doctor',$data);
	// }
	//
	// public function doctor_search_list()
	// {
	// 	$_SESSION['p_name']="doctor_search_list";
	// 	$this->load->view('doctor_search_list');
	// }
	//
	// public function user_register()
	// {
	// 	$_SESSION['p_name']="user_register";
	//
	// 	$this->load->view('user_register');
	// }

}
