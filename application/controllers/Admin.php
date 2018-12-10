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


}
