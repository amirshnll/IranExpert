<?php

/*
 *
 * Name 		: Project Model
 * Date 		: 1395/08/17
 * Auther 		: A.shokri
 * Description 	: The Model From irex_job Table.
 *
*/

class project_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insert_project($user_id, $project_title, $start_date, $end_date, $description)
	{
		$this->db->where('user_id', $user_id);
		$result = $this->db->get('project');

		if($result->num_rows()<20)
		{
			$data = array
			(
				'user_id'		=>	$user_id,
				'title'			=>	$project_title,
				'start'			=>	$start_date,
				'end'			=>	$end_date,
				'description'	=>	$description
			);

			$this->db->insert('project', $data);
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function read_project($user_id)
	{
		$this->db->where('user_id', $user_id);
		$result = $this->db->get('project', 20);

		if($result->num_rows()>0)
		{
			return $result->result_array();
		}
		else
		{
			return 0;
		}
	}

	public function update_project($user_id, $project_id, $project_title, $start_date, $end_date, $description)
	{
		$data = array(
			'title'			=>	$project_title,
			'start'			=>	$start_date,
			'end'			=>	$end_date,
			'description'	=>	$description
		);
		$this->db->set($data);
		$this->db->where('user_id', $user_id);
		$this->db->where('id', $project_id);
		$this->db->update('project');
	}

	public function delete_project($id, $user_id)
	{
		$this->db->where('id', $id);
		$this->db->where('user_id', $user_id);
		$result = $this->db->delete('project');

		return $result;
	}

	public function fetch_record_with_id($user_id, $project_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->where('id', $project_id);
		$result = $this->db->get('project', 1);

		if($result->num_rows()>0)
		{
			return $result->result_array();
		}
		else
		{
			return 0;
		}
	}
}

?>