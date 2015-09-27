<?php
class Mnews extends CI_Model{
	function get_cat_news(){
		$this->db->select('name_cat');
		$this->db->from('cat_news');
		return $this->db->get()->result();
	}

	function get_news($cat_news){
		$this->db->select('name_cat,id_news,title,content_news,date_news,news.cat,cat_news.id_cat');
		$this->db->from('news');
		$this->db->join('cat_news','news.cat=cat_news.id_cat');
		$this->db->where('name_cat',$cat_news);
		return $this->db->get()->result();
	}

	function news($id_news){
		$this->db->select('title,content_news,date_news');
		$this->db->from('news');
		$this->db->where('id_news',$id_news);
		return $this->db->get();
	}

	function get_user($username,$password){
		$this->db->select('username,password,name_level');
		$this->db->from('user');
		$this->db->join('level','user.level=level.id_level');
		$this->db->where(array('username'=>$username,'password'=>$password));
		return $this->db->get();
		
	}

	
	function select_user(){
	 	$this->db->select('username,password,level.name_level,position.name_position');
		$this->db->from('user');
		$this->db->join('level','user.level=level.id_level');
		$this->db->join('position','user.position=position.id_position');
		return $this->db;
	}

	function select_position(){
		$this->db->select('*');
		$this->db->from('position');
		return $this->db->get();
	}
	
	function select_level(){
		$this->db->select('*');
		$this->db->from('level');
		return $this->db->get();
	}

	function insert_user($data){
		$this->db->insert('user',$data);
	}
}


?>