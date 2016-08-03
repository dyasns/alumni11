<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $data['content']="index";
		$this->load->view('user/template',$data);
	}
	function ganti_password()
	{
	    $data['content']="ganti_password";
		$this->load->view('user/template',$data);
	}
	function ganti_profile()
	{
	    $data['content']="ganti_profile";
		$this->load->view('user/template',$data);
	}
	function profile()
	{
	    $data['content']="profile";
		$this->load->view('user/template',$data);
	}
	function event()
	{
	    $data['content']="event";
		$this->load->view('user/template',$data);
	}
	function buat_event(){
	    $data['content']="buat_event";
		$this->load->view('user/template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */