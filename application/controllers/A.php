<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A extends CI_Controller {

	public function sign_in()
	{
		$this->load->model('login_account');
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('v_signin');
        }
        if (!empty($this->input->post('username')) && !empty($this->input->post('password'))){
        	$data=array(
	        	'username' => $this->input->post('username'),
	        	'password' => md5($this->input->post('password'))
	        );
	        if($this->login_account->signin($data)){
	        	redirect(base_url());
	        }else{
	        	$this->load->view('v_signin');
	        }
        }

	}
	public function sign_up()
	{
		$this->load->model('login_account');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[16]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[25]');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('v_signup');
        }
        if ($this->input->post('username') && $this->input->post('password') && $this->input->post('passconf') && $this->input->post('email')){
        	if(strlen($this->input->post('username')) >= 4 && strlen($this->input->post('username')) <=16){
        		if(strlen($this->input->post('password')) >=6 && strlen($this->input->post('password')) <=16){
        			if($this->input->post('passconf')==$this->input->post('password')){
        				if(filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL)){
	        				$data=array(
	        					'username' => $this->input->post('username'),
	        					'password' => md5($this->input->post('password')),
	        					'email' => $this->input->post('email'),
	        					'status' => 0,
	        					'date_created' => date('Y-m-d')
	        				);
	        				if($this->login_account->signup($data)){
	        					redirect(base_url());
	        				}else{
	        					$this->load->view('v_signup');
	        				}
        				}
        			}
        		}
        	}
        }

	}
}
