<?php
class Mnews extends CI_Model{
	function get_cat_news(){
		return $this->db->query("select name_cat from cat_news")->result();
	}

	function get_news($cat_news){
		return $this->db->query("select name_cat,id_news,title,content_news,date_news,news.cat,cat_news.id_cat from news,cat_news where news.cat=cat_news.id_cat and name_cat='$cat_news'")->result();
	}

	function news($id_news){
		return $this->db->query("select title,content_news,date_news from news where id_news=$id_news")->row();
	}

	function get_user($username,$password){
		return $this->db->query("select username,password,name_level from user,level where user.level=level.id_level and username='$username' and password='$password'");
	}
}


?>