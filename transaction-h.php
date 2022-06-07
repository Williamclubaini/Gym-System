<?php $page = basename(__FILE__);?>
<?php include 'model/data.php';?>
<?php include 'controller/get_page_name.php';?>
<?php include 'templates/header.php'; ?>
<?php include 'templates/helpers.php';?>
<?php include 'templates/side-bar.php';?>
<?php include 'templates/top-bar.php';?>

        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Transaction History</h3>
                                
                            </div>
                            <div class="card-body">
                                
                            </div>
                        </div>
                        <div class="card bg-none b-none">
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table_custom text-nowrap spacing5 text-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Session</th>
                                                <th>Payment Method</th>
                                                <th>Amount</th>
                                                <th>Transaction Date</th>
                                                <th>-- . --</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $row) {?>
                                            <tr>
                                                <td class="width45">
                                                    <i class="fa fa-folder"></i>
                                                </td>
                                                <td>
                                                    <span class="folder-name"><?php echo $row->session; ?></span>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <?php echo $row->payment_method;?>
                                                    </div>
                                                </td>
                                                <td class="width100">
                                                    <span>MK<?php echo number_format($row->price,2);?></span>
                                                </td>
                                                <td class="width100">
                                                    <span><?php echo $row->payment_date;?></span>
                                                </td>
                                                <td class="width100 text-center">
                                                    <span class="size"> - </span>
                                                </td>
                                            </tr>
                                      <?php }?>                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/js/core.js"></script>
</body>

<!-- soccer/project/app-filemanager.html  07 Jan 2020 03:40:36 GMT -->
</html>