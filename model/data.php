<?php 
include 'includes.php';

class Data extends Connection {

	use Queries;
	use Registering;
	use account;
	use reset_password;

	private $array = [];

	private function session($name)
	{
		session_start();
		$_SESSION['name'] = $name;
		header('Location:dashboard.php');
	}

	protected function select($sql)
	{
		try
		{
		    $query = $this->Con()->query($sql);
		    $rows = $query->fetchAll();
		    return $rows;
	    }
	    catch(PDOException $E)
	    {
	    	echo $E->getMessage();
	    }
	}

	public function insert($data, $sql)
	{
		try
		{
			$query = $this->Con()->prepare($sql);
			$query->execute($data);
		}
		catch(PDOException $E)
		{
			echo $E->getMessage();
		}
	}

	public function update($email, $password, $sql)
	{

		try
		{
			$query = $this->Con()->prepare($sql);
			$query->bindParam(':p', $password, PDO::PARAM_STR); 
			$query->bindParam(':e', $email, PDO::PARAM_STR);
			$query->execute();

		}
		catch(PDOException $E)
		{
			echo $E->getMessage();
		}
	}

	public function updateusers($i, $m, $stam, $etam, $stpm, $etpm, $sql)
	{

		try
		{
			$query = $this->Con()->prepare($sql);
			$query->bindParam(':i', $i, PDO::PARAM_STR); 
			$query->bindParam(':m', $m, PDO::PARAM_STR);
			$query->bindParam(':stam', $stam); 
			$query->bindParam(':etam', $etam);
			$query->bindParam(':stpm', $stpm); 
			$query->bindParam(':etpm', $etpm);
			$query->execute();

		}
		catch(PDOException $E)
		{
			echo $E->getMessage();
		}
	}

	public function delete($id, $sql)
	{
		$query = $this->Con()->prepare($sql);
		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$query->execute();
	}

	public function count($sql)
	{
		try
		{
		    
		    $query = $this->Con()->query($sql);
		    $number = $query->rowCount();
		    return $number;
	    }
	    catch(PDOException $E)
	    {
	    	echo $E->getMessage();
	    }
	}

}

?>