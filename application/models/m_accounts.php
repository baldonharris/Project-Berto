<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_Accounts extends CI_Model {

        public function create($data) {
            $this->db->insert('accounts', $data);
            $id = $this->db->insert_id();

            return $id;
        }

        public function retrieve($data = null) {
            if (!is_array($data) || $data == null) {
                return $this->db->get('accounts')->result_array();
            } else {
                return $this->db->get_where('accounts', $data)->result_array();
            }
        }

        public function retrieve_by_id($id) {
            return $this->db->get_where('accounts', ['id'=>$id])->result_array();
        }

        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update('accounts', $data);
        }

        public function delete($id) {
            return $this->db->delete('accounts', ['id'=>$id]);
        }

    }
?>
