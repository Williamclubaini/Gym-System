<?php $page = basename(__FILE__); ?>
<?php include 'model/data.php'; ?>
<?php include 'controller/get_page_name.php';?>
<?php include 'templates/header.php';?>
<?php include 'templates/helpers.php';?>
<?php include 'templates/side-bar.php';?>
<?php include 'templates/top-bar.php';?>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-12" >
                <div class="card">
                    <div class="card-body">
                        <img src="assets/images/fit-9.jpeg" class="img-fluid" style="height: 400px;">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                            <thead>
                                <tr>
                                    <th colspan="5">Gym Session's</th>
                                    <th colspan="3">Pricing</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Session</th>
                                    <th>Access</th>
                                    <th>Price</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $row) {?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>SN-<?php echo $row->id; ?></td>
                                    <td><span><?php echo $row->session; ?></span></td>
                                    <td><span><?php echo $row->access; ?></span></td>
                                    <td><span>MK<?php echo number_format($row->price, 2); ?></span></td>
                                    <td><span>
                                <a href="make-payments.php?session=<?php echo $row->session;?>" class="btn btn-primary btn-block" title="">Subscribe</a></span></td>
                                </tr>
                                 <?php }
                                 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'templates/footer.php';?>