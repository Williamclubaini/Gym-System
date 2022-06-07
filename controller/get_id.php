<?php 

class ID extends Data{

	public function getId()
	{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$this->delete($id, $this->delete_user);
			echo '<script>alert("Record successfully deleted")</script>';
		} 
	}
}

$idobj = new ID();
$get = $idobj->getId();

?>