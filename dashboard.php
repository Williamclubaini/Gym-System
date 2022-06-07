<?php  session_start();?>
<?php $page = basename(__FILE__);?> 
<?php include 'model/data.php';?>
<?php include 'controller/get_page_name.php';?>
<?php include 'controller/if_session_not_set.php';?>
<?php include 'templates/header.php'; ?>
<?php include 'templates/helpers.php';?>
<?php include 'templates/side-bar.php';?>
<?php include 'templates/top-bar.php';?>
<?php foreach ($data as $row){};?> 
<?php include 'templates/user-info.php';?>
<?php include 'templates/noticeboard.php';?>
<?php include 'templates/transaction-history.php';?>
<?php include 'templates/footer.php';?>