<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class User extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->library('google');
            if(!$this->session->userdata('logged_in')){
                redirect('login/index');
            }
        }
        
        public function index(){
            $this->load->view('admin/login');
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
                if($status == 'admin'){
                    $user_data = array(
                        'status' => $status,
                        'id_pegawai' => $id,
                        'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);
                    redirect('admin/index');
                }else{
                    redirect('user/index');
                }
            } 
        }

        public function buy(){
            $id_ticket = $this->input->post('id_ticket');
            $qty = $this->input->post('qty');
            $harga = $this->input->post('harga');
            $id_user = $this->input->post('email_user');
            // $nama_user = $this->input->post('nama_user');
            // $id_user = $this->m_user->get_id_by_email_name($nama_user, $email_user);
            $status = 'being verified';

            $order_proses=$this->m_pembelian->create_pembelian($id_ticket,$id_user,$harga,$qty,$status);
            if($order_proses){
                redirect(base_url('home/buy'));
            }

        }

        public function print_ticket(){
            $this->load->library('pdfgenerator');
            $nama_paket = $this->session->userdata('nama_paket');
            $data['pelajarans'] = $this->pelajaran_model->get_pelajaran($nama_paket);
            $html = $this->load->view('invoice', $data, true);
            $this->pdfgenerator->generate($html,'Pembelian Ticket');
          }

        public function logout(){
            session_destroy();
            unset($_SESSION['access_token']);
            $session_data=array(
                    'sess_logged_in'=>0);
            $this->session->set_userdata($session_data);
            redirect(base_url());
        }
    }
?>