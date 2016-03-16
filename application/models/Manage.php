<?php 
class Manage extends CI_Model{

	function add_word($data){
		$this->db->insert('keywords', $data);
		return $this->db->insert_id();
	}

	function add_picture($pic){
		return $this->db->insert('attach',$pic);
	}

	function get_keywords($uid,$limit,$off_set){
		if($uid==''){
			$this->db->where('deleted',0);
			$this->db->order_by("keywords_id", "desc"); 
			$this->db->limit($limit,$off_set);
			return $this->db->get('keywords');
		}else{
			$this->db->where('deleted',0);
			$this->db->where('users_id',$uid);
			$this->db->order_by("keywords_id", "desc");
			$this->db->limit($limit,$off_set); 
			return $this->db->get('keywords');
		}
	}

	function get_count_all_keywords($uid){
		if($uid==''){
			$this->db->where('deleted',0);
			$this->db->order_by("keywords_id", "desc"); 
			//$this->db->limit($limit,$off_set);
			return $this->db->get('keywords')->num_rows();
		}else{
			$this->db->where('deleted',0);
			$this->db->where('users_id',$uid);
			$this->db->order_by("keywords_id", "desc");
			//$this->db->limit($limit,$off_set); 
			return $this->db->get('keywords')->num_rows();
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
		$this->db->where('keywords.deleted',0);
		$this->db->from('keywords');
		$this->db->join('users','keywords.users_id=users.users_id');
		return $this->db->get();
	}

	function get_search_content($search){
		$this->db->not_like('keyword_title', $search); 
		$this->db->like('keyword_desc_en', $search); 
		//$this->db->like('keyword_desc_kh', $search); 
		$this->db->where('keywords.deleted',0);
		$this->db->from('keywords');
		$this->db->join('users','keywords.users_id=users.users_id');
		return $this->db->get();
	}

	function insert_user($data){
		return $this->db->insert('users',$data);
	}

	function get_all_user(){
		$this->db->where('deleted',0);
		$this->db->where('users_id!=',1);
		$this->db->order_by('users_id','desc');
		return $this->db->get('users');
	}

	function get_image($id){
		$this->db->where('keyword_id',$id);
		return $this->db->get('attach');
	}

}
?>