<?php

class Connection {

	private $dbname   = 'mysql:host=localhost;dbname=gymsystemdb;charset=utf8';
	private $username = 'root';
	private $password = '';

	protected function Con()
	{
		try
		{
		     $conn = new PDO($this->dbname, $this->username, $this->password);
		     $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		     return $conn;
	    }
	    catch(PDOException $E)
	    {
	    	echo $E->getMessage();
	    }
	}

}


?>