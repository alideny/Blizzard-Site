<?php
if(!defined('BASEPATH')) exit('No hay acceso directo a este script.');
class News_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index_news()
	{
			$query = $this->db->query("SELECT * FROM `bs_news` ORDER BY `id` DESC LIMIT 5");
			return $query->result_array();
	}
}