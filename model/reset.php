<?php 

trait reset_password
{
	public function reset($data, $sql)
	{
		$email    = $data[0];
		$password = $data[1];

		$rows = $this->select($this->users);

		$key = array_search($email, array_column($rows, 'email'));

		$db_email = $rows[$key]->email;

		if ($db_email !== $email)
		{
			 echo '<script>alert("Email you have provided does not exist")</script>';
			 echo '<script>window.location="forgot-password.php"</script>';
		}
		else
		{
			$this->update($email, $password, $sql);
			echo '<script>alert("Your password has been reset")</script>';
			echo '<script>window.location="index.php"</script>';
		}
	}
}

?>