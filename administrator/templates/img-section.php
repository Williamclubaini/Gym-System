	<div class="row"><!----IMAGE SECTION----->
                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                        <div class="card">
                           <img src="../assets/images/fit-8.jpeg" class="img-fluid"> 
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                       <div class="card member-panel">
                             <img src="../assets/images/fit-11.jpeg" class="img-fluid"> 
                        </div>
                     </div>
                </div> <!------end image section--->


            <div class="content">
                <div class="row">
                    <div class="col-sm-8 col-6">
                        <h4 class="page-title">Level Of Attendace</h4>
                    <small>Active members will appear at more places</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Member ID</th>
                                        <th>Member Name</th>
                                        <th>Logged in Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row) {?>
                                    
                                    
                                    <tr>
                                        <td><?php echo $row->id;?></td>
                                        <td>
                                            <strong><?php echo $row->name;?></strong>
                                        </td>
                                        <td><?php echo $row->login_time;?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            