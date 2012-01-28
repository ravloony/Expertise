<?php

Class App_model extends CI_Model {
  
  function __construct()
  {
    parent::__construct();
    
  }

  function _level($hours)
  {
    if ($hours < 10000)
    {
      return 'Beginner';
    }
    return 'World Class';
  }

  function get_tasks()
  {
    $query = $this->db->query('SELECT id, name, level, hours FROM expertise');
    
    return $query->result_array();
  }

  function get_task($id)
  {
    $query = $this->db->get_where('expertise', array('id' => $id));
    
    return $query->row();
  }

  function set_task()
  {
    $hours = $this->input->post('hours');
    $level = $this->_level($hours);
    $data = array(
		  'name' => $this->input->post('name'),
		  'hours' => $hours,
		  'level' => $level
		  );
    $this->db->insert('expertise', $data);
  }
  
  function update_task()
  {
    $newhours =  $this->input->post('hours') +  $this->input->post('currenthours');
    $level = $this->_level($newhours);
    $data = array(
		  'hours' => $newhours,
		  'level' => $level
		  );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('expertise',$data);
  }

  function delete_task($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('expertise');
  }
}
?>