<?php session_start(); ?>
<?php $page = basename(__DIR__).'/'.basename(__FILE__); ?>
<?php include '../model/data.php';?>
<?php include '../controller/post_handler.php';?>
<?php include '../controller/get_page_name.php';?>
<?php include 'templates/header.php'; ?>
<?php include 'templates/top-bar.php'; ?>
<?php include 'templates/side-bar.php'; ?>
<?php foreach ($data as $row){};?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="update.php" method="POST">
                    <h3 class="page-title">Notify users any information concerning the gym</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Short Message / welcome remarks / problem message <span class="text-danger">*</span></label>
                                <input class="form-control" name="smsg" type="text" value="<?php echo $row->inform_user; ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Message</label>
                                <input class="form-control" name="msg" value="<?php echo $row->message;?>" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Start Time AM</label>
                                <input class="form-control" name="stam" 
                                value="<?php echo $row->start_timeam;?>" type="time">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>End Time AM</label>
                                <input class="form-control" name="etam" value="<?php echo $row->end_timeam;?>" type="time">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Start Time PM</label>
                                <input class="form-control" name="stpm" value="<?php echo $row->start_timepm;?>" type="time">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>End Time PM</label>
                                <input class="form-control" name="etpm" value="<?php echo $row->end_timepm;?>" type="time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center m-t-20">
                            <button type="submit" name="updates" class="btn btn-primary submit-btn">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'templates/footer.php'; ?>