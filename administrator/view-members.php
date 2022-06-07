<?php session_start(); ?>
<?php 
$page = basename(__DIR__).'/'.basename(__FILE__);
?>
<?php include '../model/data.php';?>
<?php include '../controller/get_page_name.php';?>
<?php include '../controller/get_id.php';?>
<?php include 'templates/header.php'; ?>
<?php include 'templates/top-bar.php'; ?>
<?php include 'templates/side-bar.php'; ?>

<div class="page-wrapper">
    <br>
 <div class="container">
        <div class="row"><!----IMAGE SECTION----->
                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                        <div class="card">
                           <img src="../assets/images/fit-7.jpeg" class="img-fluid"> 
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                       <div class="card member-panel">
                             <img src="../assets/images/fit-6.jpeg" class="img-fluid"> 
                        </div>
                     </div>
                </div> <!------end image section--->
 </div>
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Registered Members Records</h4>
                <small>Check and see how the members number is growing</small>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th style="min-width:200px;">Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Location</th>
                                <th style="min-width: 110px;">Join Date</th>
                                <th>Level</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // if(empty($data))
                            // {
                            //     echo "there are no records available";}
                              foreach ($data as $row) {?>
                            <tr>
                                <td>
                                    <img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle" alt="">
                                    <h2>
                                        <?php echo $row->name;?>
                                    </h2>
                                </td>
                                <td>
                                    <?php echo $row->email;?>

                                </td>

                                <td>
                                    <?php echo $row->contact;?>
                                </td>
                                <td>
                                    <?php echo $row->location;?>
                                </td>
                                <td><?php echo $row->join_date;?></td>
                                <td>
                                    <span class="custom-badge status-green">
                                        <?php echo $row->usertype;?></span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                            <a href="view-members.php?id=<?php 
                                            echo $row->id;?>" class="btn btn-danger" title="">Delete</a>

                                    </div>
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
<div id="delete_employee" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Employee?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'templates/footer.php'; ?>