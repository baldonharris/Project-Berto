<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('m_tspots');
            $this->load->model('m_accounts');
        }

        public function index() {
            $this->load->view('home');
        }

        public function input() {
            if ($this->hasSession()) {
                $this->load->helper('url');
                redirect(base_url('tourist'), 'refresh');
            } else {
                $this->load->view('login');
            }
        }

        public function login() {
            $data = $this->input->post();
            $data['password'] = md5($data['password']);

            $data = $this->m_accounts->retrieve($data);

            if (count($data) == 1) {
                $this->session->set_userdata(['account'=>$data]);
            }

            echo count($data);
        }

        public function logout() {
            unset($_SESSION['account']);
            $this->load->helper('url');
            redirect(base_url(), 'refresh');
        }

        private function hasSession() {
            $count = count($this->session->userdata('account'));

            return ($count == 1);
        }

    }
?>
