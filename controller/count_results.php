<?php 

class Count extends Data{

	public function count_users()
	{
		return $this->count($this->userscount);
	}

	public function count_payments()
	{
		return $this->count($this->paymentscount);
	}
}

$count = new Count();
$users = $count->count_users();
$payments = $count->count_payments();
?>