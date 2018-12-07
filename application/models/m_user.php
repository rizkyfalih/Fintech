<?php
    class M_User extends CI_Model {
        /* CRUD Function */
        public function create_user($id, $name){
            $this->db->query("INSERT INTO user(id_user,nama_user) VALUES ('$id', '$name') ON DUPLICATE KEY UPDATE id_user = '$id' ");

            return true;
        }
        

    }

?>