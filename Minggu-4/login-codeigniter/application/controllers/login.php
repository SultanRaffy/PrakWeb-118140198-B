<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model','model_model');
    }

    public function index(){
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login/index');
		} else {
			$this->cekLogin();
		}
    }

    public function cekLogin(){
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $getUser = $this->model_model->getUsername($username);

        if($getUser){
            if($getUser['password']==$password){
                $data=[
                    'id'=> $getUser['id'],
                    'username'=> $username,
                    'fname' => $getUser['fname'],
                    'loggedin_time' => time()
                ];
                $this->session->set_userdata($data);
                if($getUser['id']==1){
                    redirect('admin');
				} else {
					redirect('user');
                }
            }else {
				$this->session->set_flashdata('message', '<p>Username/Password salah</p>');
				redirect('login');
			}
        }else{
            $this->session->flashdata('message','<p>User tidak Terdaftar</p>');
            redirect('login');
        }
    }
}
?>