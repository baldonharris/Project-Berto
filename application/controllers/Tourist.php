<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Tourist extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('m_tspots');
        }

        public function index() {
            $session = $this->session->userdata('account');

            if ($session == NULL) {
                $this->load->helper('url');
                redirect(base_url(), 'refresh');
            } else {
                $this->load->view('manage');
            }
        }

        public function create() {
            $data = $this->input->post();

            $upload = isset($_FILES['picture']) ? $this->do_upload() : NULL;
            $data['picture'] = is_array($upload) ? '' : $upload;
            $data['id'] = $this->m_tspots->create($data);

            $data['picture'] = base_url('assets/images/'.$upload);

            echo json_encode(['status'=>true, 'data'=>$data]);
        }

        public function retrieve($type) {
            $data = $this->modifyData($this->m_tspots->retrieve($type));

            echo json_encode($data);
        }

        public function retrieve_by_id($id) {
            $data = $this->modifyData($this->m_tspots->retrieve($id));

            echo json_encode($data);
        }

        public function retrieve_by_name($wildcard='', $type='all') {
            $data = $this->modifyData($this->m_tspots->retrieve_by_name($wildcard, $type));

            echo json_encode($data);
        }

        public function update($id) {
            $data = $this->input->post();

            $upload = isset($_FILES['picture']) ? $this->do_upload() : NULL;

            if (is_array($upload) || $upload == NULL) {
                unset($data['picture']);
            } else {
                $data['picture'] = $upload;
            }

            $status = $this->parseStatus($this->m_tspots->update($id, $data));

            $d = $this->m_tspots->retrieve_by_id($id);
            $data['picture'] = base_url('assets/images/'.$d[0]['picture']);

            echo json_encode(['status'=>$status, 'data'=>$data]);
        }

        public function delete($id) {
            $status = $this->parseStatus($this->m_tspots->delete($id));

            echo json_encode(['status'=>$status, 'data'=>$id]);
        }

        private function parseStatus($status) {
            if ($status == 1 || $status == true) {
                $status = true;
            }

            return $status;
        }

        private function do_upload() {
    		$config['upload_path']    = 'assets/images';
    		$config['allowed_types']  = 'gif|jpg|png';
    		$config['max_size']       = '2048';
    		$config['max_width']      = '2047';
    		$config['max_height']     = '2047';
    		$config['encrypt_name']   = TRUE;

    		$this->load->library('upload', $config);

    		$errors = array();

    		if(!$this->upload->do_upload('picture')){
    			return array('dp'=>'Please follow the specifications below.');
    		}
    		$file = $this->upload->data();
            return $file['file_name'];
    	}

        private function modifyData($data) {
            foreach ($data as $index => $row) {
                $data[$index]['picture'] = base_url('assets/images/'.$data[$index]['picture']);
            }

            return $data;
        }
		
		public function aboutus() {
			$this->load->view('aboutus');
		}
		
		public function contactus() {
			$this->load->view('contactus');
		}
		
		public function spots() {
			$this->load->view('spots');
		}

		public function search() {
            $this->load->view('search');
        }
		
		public function page($name) {
			$this->load->view($name);
		}

    }
?>
