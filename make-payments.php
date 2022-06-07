<?php session_start(); ?>
<?php $page = basename(__FILE__);?> 
<?php include 'model/data.php';?>
<?php include 'controller/post_handler.php';?>
<?php include 'controller/get_page_name.php';?>
<?php include 'templates/header.php';?>
<?php include 'templates/helpers.php';?>
<?php include 'templates/side-bar.php';?>
<?php include 'templates/top-bar.php';?>
<?php include 'controller/user.php';?>
<?php
if (isset($_GET['session'])) {
    $session = $_GET['session'];
}
else
{
    $session = '-- Select --';

    $session;
}
?>
<div class="section-body">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="d-lg-flex justify-content-between">
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Company_Settings">Payment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section-body">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="tab-pane active show" id="Company_Settings">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Payment Form</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Customer Name <span class="text-danger">*</span></label>
                                                <input class="form-control" name="name" type="text" value="<?php echo $row->name;?>" disabled>
                                              
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Mobile Number <span class="text-danger">*</span></label>
                                                <input class="form-control" value="<?php echo $row->contact;?>" type="text" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-envelope"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" value="<?php echo $row->email;?>" type="email" disabled>
                                                <input name="email" type="hidden" value="<?php echo $row->email;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Location <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?php echo $row->location;?>" type="email" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Session Duration</label>
                                                <select class="form-control" name="session">
                                                    <option value="<?php echo $session;?>"><?php echo $session;?></option>
                                                    <option value="Day">Day</option>
                                                    <option value="Week">Week</option>
                                                    <option value="Month">Month</option>
                                                    <option value="Year">Year</option>
                                                </select>
                                            <small class="text-danger"><?php echo $error4[1] ?? 'Visit <a href="session.php">Session</a> to check session pricing before making payments.'; ?></small>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label>Payment Method</label>
                                                <select class="form-control" name="pmethod">
                                                    <option value="">-- Select Payment Method --</option>
                                                    <option value="TNM Mpamba">TNM Mpamba</option>
                                                    <option value="Airtel Money">Airtel Money</option>
                                                </select>
                                                <small class="text-danger"><?php echo $error4[2] ?? '';?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Send Money To:</label>
                                                <input class="form-control" value="818-978-7102" name="receiverphone" type="text" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Name / Gym Manager</label>
                                                <input class="form-control" name="receiver" value="Trust Saka" type="text" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center m-t-20">
                                            <button type="submit" name="send" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   


<?php include 'templates/footer.php';?>