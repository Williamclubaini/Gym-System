<?php 

$key = array_search($_SESSION['name'], array_column($data, 'name'));
$row  = $data[$key];

?>