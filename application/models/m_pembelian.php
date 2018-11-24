<?php

    class M_pembelian extends CI_Model {
        /* CRUD function */
        public function create_pembelian($id_pembelian,$pj_total,$pj_bayar,$pj_kembalian){
            // $id_pegawai = $this->session->userdata('id_pegawai');
            // $date = date("Y-m-d");
            $this->db->query("INSERT INTO pembelian (id_pembelian,pj_total,pj_bayar,pj_kembalian,id_pegawai,pj_tgl) VALUES ('$id_pembelian','$pj_total','$pj_bayar','$pj_kembalian','$id_pegawai','$date')");
            foreach($this->cart->contents() as $item){
                $id_detail_pembelian = $this->m_detil_pembelian->kode_detil_pembelian();
                $data = array(
                    'id_detil_pembelian' => $id_detail_pembelian,
                    'id_produk' => $item['id'],
                    'id_pembelian' => $id_pembelian,
                    'harga' => $item['subtotal'],
                    'qty' => $item['qty']
                );
                $this->db->insert('detil_pembelian',$data);
                $this->db->query("update ticket set jml_ticket=jml_produk-'$qty' where id_ticket='$id_ticket'");
            }
            return true;
        }

        public function edit_pembelian($id_pembelian, $data){
            $this->db->where('id_pembelian', $id_pembelian);
            $this->db->update('pembelian', $data);

            return true;
        }

        public function delete_pembelian($id_pembelian){
            $this->db->where('id_pembelian', $id_pembelian);
            $this->db->delete('pembelian');
        }

        /* GET Function */
        public function get_all_pembelian(){
            $query = $this->db->get('pembelian');
            return $query->result();
        }

        public function get_pembelian($id_pembelian){
            $this->db->where('id_pembelian',$id_pembelian);
            $query = $this->db->get('pembelian');

            return $query->row();
        }

        public function get_pembelian_by_id($id_pembelian){
            $hsl = $this->db->query("SELECT * FROM pembelian WHERE id_pembelian='$id_pembelian'");
            if($hsl->num_rows()>0){
                foreach ($hsl->result() as $data){
                    $hasil = array(
                        'id_pembelian' => $data->id_pembelian,
                        'pj_total' => $data->pj_total,
                        'pj_bayar' => $data->pj_bayar,
                        'pj_kembalian' => $data->pj_kembalian,

                    );
                }
                return $hasil;
            }
        }


        /* Other function */
        public function kode_pembelian(){
            $this->db->select('RIGHT(pembelian.id_pembelian,4) as kode', FALSE);
            $this->db->order_by('id_pembelian','DESC');    
            $this->db->limit(1);    
            $query = $this->db->get('pembelian'); //cek dulu apakah ada sudah ada kode di tabel.    
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
            $kodejadi = "Penj".$kodemax;    // hasilnya ODJ-9921-0001 dst.
            return $kodejadi;
        }

    }



?>