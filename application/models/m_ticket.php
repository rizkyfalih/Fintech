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
            $query = $this->db->query("SELECT id_user, nama_ticket, harga, qty, stat FROM pembelian JOIN ticket USING (id_ticket)");
            // if($query->num_rows()>0){
            //     foreach ($query->result() as $data){
            //         $hasil = array(
            //             'id_user' => $data->id_user,
            //             'nama_ticket' => $data->nama_ticket,
            //             'harga' => $data->harga,
            //             'qty' => $data->qty,
            //             'stat' => $data->stat,
            //         );
            //     }                
            // }
            return $query->result();
        }    
    }


?>