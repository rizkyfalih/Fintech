<?php

    class M_Ticket extends CI_Model {

        /* GET function */    
        public function get_all_ticket(){
            $query = $this->db->get('ticket');
            return $query->result();
        }

        public function get_barang(){
            $this->db->where('id_user', $this->session->userdata('user_id'));
            $query = $this->db->get('barang');
        
            return $query->row();
        }
        
        public function get_barang_info($id){
            $this->db->where('id_barang',$id);
            $get_data = $this->db->get('barang');

            return $get_data->row();
        }
        
        public function get_ticket_by_id($id_ticket){
            $hsl = $this->db->query("SELECT * FROM ticket WHERE id_ticket='$id_ticket'");
            if($hsl->num_rows()>0){
                foreach ($hsl->result() as $data){
                    $hasil = array(
                        'id_ticket' => $data->id_ticket,
                        'nama_ticket' => $data->nama_ticket,
                        'harga_jual' => $data->harga_jual,
                        'jml_ticket' => $data->jml_ticket,

                    );
                }
                return $hasil;
            }
        }

    
    }


?>