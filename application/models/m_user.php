<?php
    class M_User extends CI_Model {
        /* CRUD Function */
        public function create_user($data){
            $insert_query =  $this->db->insert('user', $data);
        }
        
        public function edit_user($id_user, $data){
            $this->db->where('id_user', $id_user);
            $this->db->update('user', $data);

            return true;
        }

        public function delete_user($id_user){
            $this->db->where('id_user', $id_user);
            $this->db->delete('user');
        }

        /* GET Function */
        public function get_all_user(){
            $query = $this->db->get('user');
            return $query->result();
        }

        public function get_user($id_user){
            $this->db->where('id_user', $id_user);
            $query = $this->db->get('user');
        }

        public function get_status_user($username, $password){
            $this->db->where('id_user', $username);
            $this->db->where('password', $password);

            $result = $this->db->get('user');
            if($result->num_rows()==1){
                return $result->row(0)->jabatan;
            }else{
                return false;
            }
        }

        public function get_id_user($username, $password){
            $this->db->where('id_user', $username);
            $this->db->where('password', $password);

            $result = $this->db->get('user');
            if($result->num_rows()==1){
                return $result->row(0)->id_user;
            }else{
                return false;
            }
        }

        public function get_id_by_email_name($name, $email){
            $this->db->where('nama_user', $name);
            $this->db->where('email_user', $email);

            $result = $this->db->get('user');
            if($result->num_rows() == 1){
                return $result->row(0)->id_user;
            } else {
                return false;
            }
        }

        /* Other function */
        public function kode_user(){
            $this->db->select('RIGHT(user.id_user,4) as kode', FALSE);
            $this->db->order_by('id_user','DESC');    
            $this->db->limit(1);    
            $query = $this->db->get('user'); //cek dulu apakah ada sudah ada kode di tabel.    
            if($query->num_rows() <> 0){      
              //jika kode ternyata sudah ada.      
              $data = $query->row();      
              $kode = intval($data->kode) + 1;    
            }
            else {      
              //jika kode belum ada      
              $kode = 1;    
            }
            $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
            $kodejadi = "Peg".$kodemax;    // hasilnya ODJ-9921-0001 dst.
            return $kodejadi;
        }
    }

?>