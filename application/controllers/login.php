<?php

class Login extends MY_Controller {

	public function index()
	{
		if ($this->session->userdata('user_id')) {
			return redirect('admin/dashboard');
		}

		$this->load->view('public/admin_login');
	}

	public function admin_login_req()
	{
		if ($this->session->userdata('user_id')) {
			return redirect('admin/dashboard');
		}
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required|alpha|maxlength[12]|trim');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_error_delimiters('<div class="tooltiptext">','</div>');

		if($this->form_validation->run()) {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('loginmodel');

			$login_id = $this->loginmodel->is_login_valid($username,$password);
			if($login_id){

				$this->session->set_userdata('user_id',$login_id);

				return redirect('admin/dashboard');
				//echo 'login success';
			}
			else{
				$this->session->set_flashdata('login_fail','Invalid Username/Password.');
				return redirect('login');
				//echo 'login failed';
			}

			//echo "Validation successful.";
		}
		else {
			$this->load->view('public/admin_login');
			//echo validation_errors();
		}

		//echo "Login request made successfully";
	}

	public function admin_logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}

}


?>