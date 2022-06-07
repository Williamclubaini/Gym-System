<?php 

$filename = str_replace('.php', NULL, $page);

class GET extends Data {

public function if_page_accessed($filename)
{
	switch ($filename) {

	 	case 'dashboard':
	 	    return $this->select($this->updates);
	 		break;

	 	case 'session':
	 	    return $this->select($this->pricing);
	 		break;

	 	case 'make-payments':
	 	    return $this->select($this->users);
	 	    break;

	 	case 'transaction-h':
	 	    return $this->select($this->transaction_history);
	 	    break;

	 	case 'administrator/dashboard':
	 	    return $this->select($this->admintrackmembers);
	 	    break;

	 	case 'administrator/view-members':
	 	    return $this->select($this->viewallmembers);
	 	    break;

	 	case 'administrator/payments':
	 	    return $this->select($this->trackpaymentsrecords);
	 	    break;

	 	case 'administrator/update':
	 	    return $this->select($this->updates);
	 	    break;
	 	
	 	default:
	 		# code...
	 		break;
	 }
}

}

$OBJ = new GET();

$data = $OBJ->if_page_accessed($filename);	

?>