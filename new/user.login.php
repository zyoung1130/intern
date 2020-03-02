<?php
require_once('database.php');
class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Comconfig();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

  public function runQuery($sql)
  {
  	$stmt = $this->conn->prepare($sql);
  	return $stmt;
  }

  public function S_user_login($userid,$userpass)
	{
		try
		{
			$stmt = $this->conn->prepare("CALL S_user_login(:xuser_id, :xuser_pass)");
      $stmt->bindparam(":xuser_id", $userid);
      $stmt->bindparam(":xuser_pass", $userpass);
			$stmt->execute();
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
      return $userRow['type'];

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}
 ?>
