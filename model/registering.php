<?php 
trait Registering{

public function match($data, $sql)
{
		$name    = $data[0];
		$email   = $data[1];
		$contact = $data[2];

		$rows = $this->select($this->users);
		$ekey = array_search($email, array_column($rows, 'email'));
		$ckey = array_search($contact, array_column($rows, 'contact'));

		$db_email = $rows[$ekey]->email;
		$db_contact = $rows[$ckey]->contact;

		if ($email == $db_email && $contact == $db_contact)
		{
		     echo '<script>alert("email and contact you have provided already exist")</script>';
             echo '<script>window.location="register.php"</script>';
	    }
	    elseif($email == $db_email)
	    {	
	    	echo '<script>alert("email already exist")</script>';
            echo '<script>window.location="register.php"</script>'; 
	    }
	    elseif($contact == $db_contact)
	    {	
	    	echo '<script>alert("contact already exist")</script>';
            echo '<script>window.location="register.php"</script>';
	    }
	    else
	    {
		   array_push($this->array, $email);
		   $this->insert($data, $sql);
		   $this->insert($this->array, $this->logintimetrack);
		   $this->session($name);
	    }
    }
}
?>