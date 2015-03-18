<?php
/*
* Process Database
*/
class DC_Database {
	//Variables
	public $db_host;
	public $db_user;
	public $db_name;
	public $db_pass;
	
	//Start functions
	function __construct(){
		$this->db_host = '';
		$this->db_user = '';
		$this->db_name = '';
		$this->db_pass = '';
	}
	
	function connect(){
		return $result;
	}
	
	function get($query){
		return $result;
	}
	
	function insert($tables, $fields){
		return $result;
	}
	
	function update($tables, $fields, $where){
		return $result;
	}
	
	function delete($tables, $where){
		return $result;
	}
}
?>