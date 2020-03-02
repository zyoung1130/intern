<?php
require_once('database.php');
class CON
{

	private $conn;
	private $conn_data;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
		$databasedata = new Database();
		$dbdata = $databasedata->dbConnectiondata();
		$this->conn_data = $dbdata;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function runQuerydata($sql)
	{
		$stmt = $this->conn_data->prepare($sql);
		return $stmt;
	}




}
 ?>
