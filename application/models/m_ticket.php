<?php

    class M_Ticket extends CI_Model {

        /* GET function */    
        public function get_all_ticket(){
            $query = $this->db->get('ticket');
            return $query->result();
        }

        public function get_ticket_by_id($id_ticket){
            $hsl = $this->db->query("SELECT * FROM ticket WHERE id_ticket=$id_ticket");
            if($hsl->num_rows()>0){
                foreach ($hsl->result() as $data){
                    $hasil = array(
                        'id_ticket' => $data->id_ticket,
                        'nama_ticket' => $data->nama_ticket,
                        'harga_jual' => $data->harga_ticket,
                        'jml_ticket' => $data->jml_ticket,

                    );
                }
                return $hasil;
            }
        }

        public function get_all_pembelian(){
            $query = $this->db->query("SELECT id_pembelian, id_user, nama_ticket, harga, qty, stat FROM pembelian JOIN ticket USING (id_ticket) ORDER BY id_pembelian DESC");

            return $query->result();
        }
        
        public function get_user_ticket($id_user){
            $query = $this->db->query("SELECT id_pembelian, id_user, nama_ticket, harga, qty, stat FROM pembelian JOIN ticket USING (id_ticket) WHERE id_user = '$id_user'");
        
            return $query->result();
        }

        public function update_status($id){
            $query = $this->db->query("UPDATE pembelian SET stat = 'verified' WHERE id_pembelian = $id");
            return true;
        }
    }


?>