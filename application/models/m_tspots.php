<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_Tspots extends CI_Model {

        public function create($data) {
            $this->db->insert('tourist_spots', $data);
            $id = $this->db->insert_id();

            return $id;
        }

        public function retrieve($data = 'all') {
            if ($data == 'all') {
                return $this->db->get('tourist_spots')->result_array();
            } else {
                return $this->db->get_where('tourist_spots', ['spot_type'=>$data])->result_array();
            }
        }

        public function retrieve_by_id($id) {
            return $this->db->get_where('tourist_spots', ['id'=>$id])->result_array();
        }

        public function retrieve_by_name($wildcard) {
            $this->db->like('name', $wildcard);
            return $this->db->get('tourist_spots')->result_array();
        }

        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update('tourist_spots', $data);
        }

        public function delete($id) {
            return $this->db->delete('tourist_spots', ['id'=>$id]);
        }

    }
?>
