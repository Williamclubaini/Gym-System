<?php session_start();?>
<?php 
$page = basename(__DIR__).'/'.basename(__FILE__);
?>
<?php include '../model/data.php';?>
<?php include '../controller/count_results.php';?>
<?php include '../controller/get_page_name.php';?>
<?php include '../controller/if_session_not_set.php';?>
<?php include 'templates/header.php'; ?>
<?php include 'templates/top-bar.php'; ?>
<?php include 'templates/side-bar.php'; ?>
<div class="page-wrapper">

    <div class="content">
        <?php include 'templates/counts.php'; ?>
        <?php include 'templates/img-section.php';?>
    </div>
</div> 
<?php include 'templates/footer.php'; ?>