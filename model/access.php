<?php 

trait account {

	public function access($data)
	{
		$email = $data[0];
		$password = $data[1];

		$rows = $this->select($this->users);

		$key = array_search($email, array_column($rows, 'email'));

		$name     = $rows[$key]->name;
		$db_email = $rows[$key]->email;
		$db_password = $rows[$key]->password;

		if ($db_email !== $email && $db_password !== $password)
		{
			 echo '<script>alert("Wrong email and password")</script>';
			 echo '<script>window.location="index.php"</script>';	
            
		}
		elseif ($db_email == $email && $db_password !== $password)
		{
			 echo '<script>alert("Wrong password")</script>';
             echo '<script>window.location="index.php"</script>';	
		}
		else
		{
			array_push($this->array, $db_email);
			$this->insert($this->array, $this->logintimetrack);
			$this->session($name);
		}

	}
}



?>