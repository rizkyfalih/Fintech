<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('google');
	}
	
	public function index(){
		$this->load->view('inosys/home');
	}

	public function ticket(){
		$this->load->view('inosys/ticket');
	}

	public function signin(){
		$data['produks'] = $this->m_ticket->get_all_ticket();
		if (isset($_GET['code'])) {
			$google_data=$this->google->validate();
			$session_data=array(
					'name'=>$google_data['name'],
					'email'=>$google_data['email'],
					'source'=>'google',
					'profile_pic'=>$google_data['profile_pic'],
					'link'=>$google_data['link'],
					'sess_logged_in'=>1
					);
			
			$this->session->set_userdata($session_data);
			$this->load->view('inosys/buy', $data);
		} else {

		$data['google_login_url']=$this->google->get_login_url();
		$this->load->view('inosys/signin',$data);
		}
	}

	public function buy(){
		$google_data=$this->google->validate();
		$session_data=array(
				'name'=>$google_data['name'],
				'email'=>$google_data['email'],
				'source'=>'google',
				'profile_pic'=>$google_data['profile_pic'],
				'link'=>$google_data['link'],
				'sess_logged_in'=>1
				);
			$this->session->set_userdata($session_data);

		$data['produks'] = $this->m_ticket->get_all_ticket();
		$this->load->view('inosys/buy',$data);
	}

	public function buy_ticket(){
		$id_ticket = $this->input->post('id_ticket');
		$qty = $this->input->post('qty');
		$harga = $this->input->post('harga');
		$id_user = $this->input->post('email_user');
		// $id_user = $this->input->post('nama_user');
		// $id_user = $this->m_user->get_id_by_email_name($nama_user, $email_user);
		$status = 'being verify';

		$order_proses=$this->m_pembelian->create_pembelian($id_ticket,$id_user,$harga,$qty,$status);
		if($order_proses){
			redirect(base_url('home/'));
		}
	}

	function get_ticket(){
		$id_ticket = $this->input->post('id_ticket');
		$data = $this->m_ticket->get_ticket_by_id($id_ticket);
		echo json_encode($data);
	}

	public function oauth2callback(){
		$google_data=$this->google->validate();
		$session_data=array(
				'name'=>$google_data['name'],
				'email'=>$google_data['email'],
				'source'=>'google',
				'profile_pic'=>$google_data['profile_pic'],
				'link'=>$google_data['link'],
				'sess_logged_in'=>1
				);
			$this->session->set_userdata($session_data);
		redirect(base_url());
	}
	public function logout(){
		session_destroy();
		unset($_SESSION['access_token']);
		$session_data=array(
				'sess_logged_in'=>0);
		$this->session->set_userdata($session_data);
		redirect(base_url(),$session_data);
	}
}
