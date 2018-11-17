<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class User extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->library('google');
        }
        
        public function index(){
            $this->load->view('login');
        }

        public function login(){
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        
            if($this->form_validation->run()==FALSE){
                $data = array(
                    'errors' => validation_errors()
                );
                $this->session->set_flashdata($data);
                redirect(login);
            }else{
                $id_pegawai = $this->input->post('username');
                $password = $this->input->post('password');
                $status = $this->m_pegawai->get_status_pegawai($id_pegawai, $password);
                $id = $this->m_pegawai->get_id_pegawai($id_pegawai, $password);
                if($status == 'kasir'){
                    $user_data = array(
                        'status' => $status,
                        'id_pegawai' => $id,
                        'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);
                    redirect('kasir/index');
                }else{
                    redirect('login/index');
                }
            } 
        }
        public function logout(){
            $this->session->sess_destroy();
            redirect('login/index');
        }
    }
?>