<?php

    class M_pembelian extends CI_Model {
        /* CRUD function */
        public function create_pembelian($id_ticket, $id_user, $harga,$qty,$status){
            // $id_pegawai = $this->session->userdata('id_pegawai');
            // $date = date("Y-m-d");
            $this->db->query("INSERT INTO pembelian(id_ticket,id_user,harga,qty,stat) VALUES ('$id_ticket', '$id_user','$harga','$qty','$status')");

            $this->db->query("update ticket set jml_ticket=jml_ticket-'$qty' where id_ticket='$id_ticket'");
            return true;
        }

    }



?>