<?php
if(!defined('BASEPATH')) exit('No hay acceso directo a este script.');
class News_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index_news()
	{
			$query = $this->db->query("SELECT * FROM `bs_news` ORDER BY `id` DESC LIMIT 4");
			return $query->result_array();
	}
	
	public function general_news()
	{
			$query = $this->db->query("SELECT * FROM `bs_news` ORDER BY `id` DESC LIMIT 10");
			return $query->result_array();
	}
	
	public function date_news()
	{
			$query = $this->db->query("SELECT * FROM `bs_news` ORDER BY `month`, `year` ");
			return $query->result_array();
	}
}
