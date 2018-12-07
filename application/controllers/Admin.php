<?php 
class Admin extends CI_Controller {
	
	public function index(){
		
		$this->load->view('admin/login');
	
		
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username == 'admin' && $password == 'admin'){
			$user_data = array(
				'status' => 'admin',
				'logged_in' => true
			);
			$this->session->set_userdata($user_data);
			
			redirect('admin/verifikasi');
		}else{
			redirect('admin/index');
		} 
	}

	public function verifikasi(){
		$data['tickets'] = $this->m_ticket->get_all_pembelian();
		$this->load->view('admin/index',$data);
	}

	public function verify($id){
		if($this->m_ticket->update_status($id)){
			redirect("admin/verifikasi");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/index');
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

	function get_ticket(){
		$id_ticket = $this->input->post('id_ticket');
		$data = $this->m_ticket->get_ticket_by_id($id_ticket);
		echo json_encode($data);
	}


}
