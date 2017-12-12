<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Account extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $session = $this->session->userdata('account');

            $this->load->model('m_accounts');
            if ($session == NULL) {
                $this->load->helper('url');
                redirect(base_url(), 'refresh');
            }
        }

        public function index() {
            $this->load->view('manage');
        }

        public function create() {
            $data = $this->input->post();
            $toReturn = [];

            $existingData = $this->m_accounts->retrieve(['username'=>$data['username']]);

            if (count($existingData) > 0) {
                $toReturn = ['status'=>false, 'data'=>[]];
            } else {
                $data['password'] = md5($data['password']);
                $data['id'] = $this->m_accounts->create($data);

                $toReturn = ['status'=>true, 'data'=>$data];
            }

            echo json_encode($toReturn);
        }

        public function retrieve() {
            $data = $this->m_accounts->retrieve();

            echo json_encode($data);
        }

        public function retrieve_by_id($id) {
            $data = $this->m_accounts->retrieve(['id'=>$id]);

            echo json_encode($data);
        }

        public function update($id) {
            $data = $this->input->post();
            $toReturn = [];

            $existingData = $this->m_accounts->retrieve(['username'=>$data['username']]);
            if (count($existingData) == 0 || $existingData[0]['id'] == $id) {
                if (empty($data['password'])) {
                    unset($data['password']);
                } else {
                    $data['password'] = md5($data['password']);
                }
                $this->m_accounts->update($id, $data);
                $toReturn = ['status'=>true, 'data'=>$data];
            } else {
                $toReturn = ['status'=>false, 'data'=>[]];
            }

            echo json_encode($toReturn);
        }

        public function delete($id) {
            $session = $this->session->userdata('account');
            $toReturn = [];

            if ($id == $session[0]['id']) {
                $toReturn = ['status'=>false, 'data'=>[]];
            } else {
                $toReturn = ['status'=>$this->parseStatus($this->m_accounts->delete($id)), 'data'=>$id];
            }

            echo json_encode($toReturn);
        }

        private function parseStatus($status) {
            if ($status == 1 || $status == true) {
                $status = true;
            }

            return $status;
        }

    }
?>
