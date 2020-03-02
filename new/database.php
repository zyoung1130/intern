<?php
class Comconfig
{   private $db_port = "3306";
    private $host = "localhost";
    private $db_name = "rrewe";
    private $db_data = "rrewe";
    private $username = "hewis";
    private $password = "masterkey";
    public  $conn;
	  public  $conn_data;


    public function dbConnection()
	{

	    $this->conn = null;
        try
		{
      $this->conn = new PDO("mysql:host=" . $this->host . ";port=".$this->db_port . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

	public function dbConnectiondata()
	{
		// $db_data = $_SESSION['user_database'];

	    $this->conn_data = null;
        try
		{
            // $this->conn_data = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_data, $this->username, $this->password);
			$this->conn_data = new PDO("mysql:host=" . $this->host . ";port=".$this->db_port . ";dbname=" . $this->db_data, $this->username, $this->password);
			$this->conn_data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Data Connection error: " . $exception->getMessage();
        }

        return $this->conn_data;
    }
}
?>
