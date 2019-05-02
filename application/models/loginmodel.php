<?php

class Loginmodel extends CI_Model {

	public function is_login_valid($username,$password)
	{

		$q = $this->db->where(['uname'=>$username,'pass'=>$password])
			->get('users');

		if ($q->num_rows()) {			
			return TRUE;
		}
		else{
			return FALSE;
		}

	}

}


?>