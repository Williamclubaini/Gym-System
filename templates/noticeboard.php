
 <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                      <h1>Notifications</h1>
                                    </div>
                                    <div class="card-body">
                                        <span class="tag tag-blue mb-3">Today</span>
                                        <p><?php echo $row->message;?></p>
                                        <div class="row">

                                            <div class="col-5 py-1 text-center"><b>MORNING</b></div>
                                            <div class="col-7 py-1"></div>

                                            <div class="col-5 py-1"><strong>Start Time:</strong></div>
                                            <div class="col-7 py-1"><?php echo $row->start_timeam;?> AM</div>
                                            <div class="col-5 py-1"><strong>Closing Time:</strong></div>
                                            <div class="col-7 py-1"><?php echo $row->end_timeam;?> AM</div>
                                            <br>
                                             <div class="col-5 py-1 text-center"><b>AFTERNOON</b></div>
                                            <div class="col-7 py-1"></div>
                                           
                                            <div class="col-5 py-1"><strong>Start Time:</strong></div>
                                            <div class="col-7 py-1"><?php echo $row->start_timepm;?> PM</div>
                                            <div class="col-5 py-1"><strong>Closing Time:</strong></div>
                                            <div class="col-7 py-1"><?php echo $row->end_timepm;?> PM</div>
                                        </div>                                        
                                    </div>
                                 
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                 
                 
                   
                </div>
            </div>            
        </div>