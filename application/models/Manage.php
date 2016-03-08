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

	function get_keyword_by_id($id){
		$this->db->where('keywords_id',$id);
		$this->db->where('keywords.deleted',0);
		$this->db->from('keywords');
		$this->db->join('users','keywords.users_id=users.users_id');
		$result = $this->db->get();
		return $result->row();
	}

	function update_word($data,$id){
		$this->db->where('keywords_id',$id);
		return $this->db->update('keywords',$data);
	}

	function delete_word($id){
		$this->db->where('keywords_id',$id);
		return $this->db->update('keywords',array('deleted'=>1));
	}

	function get_search($search){
		$this->db->like('keyword_title', $search); 
		$this->db->or_like('keyword_desc_en', $search); 
		$this->db->or_like('keyword_desc_kh', $search); 
		$this->db->where('keywords.deleted',0);
		$this->db->from('keywords');
		$this->db->join('users','keywords.users_id=users.users_id');
		return $this->db->get();
	}

}
?>