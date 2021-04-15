<?php

class rolemodel extends CI_Model {
	public function getNews() {
		return $this->db->get('news')->result();
	}
	
	public function getMessages() {
		return $this->db->get('contacts')->result();
	}

	public function addContacts($data)
	{
		return $this->db->insert('contacts', $data);
	}

	public function removeMessages($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('contacts');
	}

	public function removeNews($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news');
	}

	public function addNews($data)
	{
		return $this->db->insert('news', $data);
	}

}