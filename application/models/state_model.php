<?php

class state_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function new_state($user_id)
	{
		$data = array
		(
			'user_id'=>$user_id
		);

		$this->db->insert('state', $data);
	}
}

?>