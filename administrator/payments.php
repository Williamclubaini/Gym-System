<?php session_start(); ?>
<?php 
$page = basename(__DIR__).'/'.basename(__FILE__);
?>
<?php include '../model/data.php';?>
<?php include '../controller/get_page_name.php';?>
<?php include 'templates/header.php'; ?>
<?php include 'templates/top-bar.php'; ?>
<?php include 'templates/side-bar.php'; ?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Members Payments Records</h4>
                <small>You are allowed to view / check history of payments made by gym members</small>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Member</th>
                                <th>Session</th>
                                <th>Paid Amount</th>
                                <th>Payment Type</th>
                                <th>Paid Date & Time</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) {?>
                            <tr>
                                <td><a href="invoice-view.html">#PYMNT-000
                                        <?php echo $row->id; ?></a></td>
                                <td>
                                    <h2><a href="#">
                                            <?php echo $row->name; ?></a></h2>
                                </td>
                                <td>
                                    <?php echo $row->session; ?>
                                </td>
                                <td>MK
                                    <?php echo number_format($row->price, 2); ?>
                                </td>
                                <td>
                                    <?php echo $row->payment_method; ?>
                                </td>
                                <td>
                                    <?php echo $row->payment_date; ?>
                                </td>
                                
                            </tr>
                            <?php } ?>

                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'templates/footer.php'; ?> 