<?php

class Home_model extends CI_Model{
		function __construct(){
   parent::__construct();
   $this->load->driver('cache');
  }

  	/******************************************************/
		function service_enable(){
			$this->db->select('*');
			$this->db->from('system_service');
				$query = $this->db->get();
				return $query->result_array();
	}
	function get_service_list_footer(){
			$this->db->select('*');
			$this->db->where('active',1);
			$this->db->where('active_menu',2);
			$this->db->where('category_list',1);
			$this->db->where('subcate',6);
			$this->db->order_by("stt", "asc"); 
			$this->db->from('tbl_danhmuc');
				$query = $this->db->get();
				return $query->result_array();
	}
	function get_prodcts_list_footer(){
			$this->db->select('*');
			$this->db->where('active',1);
			$this->db->where('active_menu',2);
			$this->db->where('category_list',2);
			$this->db->where('subcate',2);
			$this->db->order_by("stt", "asc"); 
			$this->db->from('tbl_danhmuc');
				$query = $this->db->get();
				return $query->result_array();
	}
	function menu_get(){
		$this->db->select('*');
		$this->db->where('active',1);
		$this->db->where('active_menu',2);
		$this->db->order_by("stt", "asc"); 
		$this->db->where('subcate',0);
		$this->db->from('tbl_danhmuc');
			$query = $this->db->get();
			return $query->result_array();
	}	
	function check_login_user($username,$passwoeds){
		$this->db->select('*');
		$this->db->where('nameuser',$username);
		$this->db->where('passwords',$passwoeds);
		$this->db->from('tbl_user');
			$query = $this->db->get();
			return $query->result_array();
	}
	function news_get(){
		$this->db->select('*');
		$this->db->limit(15);
		$this->db->order_by('timedate',"desc");
		$this->db->from('tbl_news');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_danhmuc($id){
		$this->db->select('*');
		$this->db->where('id_danhmuc',$id);
		$this->db->order_by("stt", "asc"); 
		$this->db->from('tbl_danhmuc');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_list_product($id){
		$this->db->select('*');
		$this->db->where('id_catelog',$id);
		$this->db->from('tbl_products');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_view_news($id){
		$this->db->select('*');
		$this->db->where('id_news',$id);
		$this->db->from('tbl_news');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_information($id){
		$this->db->select('*');
		$this->db->where('category_list',$id);
		$this->db->from('tbl_content_service');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_list_news($id){
		$this->db->select('*');
		$this->db->where('id_news !=',$id);
		$this->db->order_by('timedate',"desc");
		$this->db->limit(35);
		$this->db->from('tbl_news');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_detail_list_product($id){
		$this->db->select('*');
		$this->db->where('id_products',$id);
		$this->db->from('tbl_products');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_detail_list_products($id){
		$this->db->select('*');
		$this->db->where('id_catelog !=',$id);
		$this->db->limit(15);
		$this->db->order_by('id_products',"desc");
		$this->db->from('tbl_products');
			$query = $this->db->get();
			return $query->result_array();
	}	
	function get_detail_list_productes($id){
		$this->db->select('*');
		$this->db->where('id_catelog ',$id);
		$this->db->limit(30);
		$this->db->order_by('id_products',"desc");
		$this->db->from('tbl_products');
			$query = $this->db->get();
			return $query->result_array();
	}
	function group_products(){
		$this->db->select('*');
		$this->db->group_by('id_catelog'); 
		$this->db->from('tbl_products');
			$query = $this->db->get();
			return $query->result_array();
	}
	function groups_news(){
		$this->db->select('*');
		$this->db->order_by('timedate',"desc");
		$this->db->from('tbl_news');
			$query = $this->db->get();
			return $query->result_array();
	}
	function index_get_product($id){
		$this->db->select('*');
		$this->db->where('id_catelog',$id);
		$this->db->from('tbl_products');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_products_list($id){
		$this->db->select('*');
		$this->db->where('id_danhmuc',$id);
		$this->db->order_by("stt", "asc"); 
		$this->db->from('tbl_danhmuc');
			$query = $this->db->get();
			return $query->result_array();
	}
	function get_slide(){
		$this->db->select('*');
		$this->db->from('tbl_slishowes');
			$query = $this->db->get();
			return $query->result_array();
	}
	function menus_get($id){
		$this->db->select('*');
		$this->db->where('active',1);
		$this->db->where('active_menu',2);
		$this->db->order_by("stt", "asc"); 
		$this->db->where('subcate',$id);
		$this->db->from('tbl_danhmuc');
			$query = $this->db->get();
			return $query->result_array();
	}
	
	/******************************************************/

	

/////////////////// End Noi dung ////////////

}
?>