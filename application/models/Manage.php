<?php 
class Manage extends CI_Model{

	function add_word($data){
		return $this->db->insert('keywords
', $data);
	}

	function get_keywords($uid){
		if($uid==''){
			$this->db->where('deleted',0);
			$this->db->order_by("keywords_id", "desc"); 
			return $this->db->get('keywords');
		}else{
			$this->db->where('deleted',0);
			$this->db->where('users_id',$uid);
			$this->db->order_by("keywords_id", "desc"); 
			return $this->db->get('keywords');
		}
	}
}
?>