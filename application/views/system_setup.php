        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Setup</a></li>
                        <li><a href="#">System Setup</a></li>
                        
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            System Setup
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <div style="" class="col-sm-1"><img src="<?php echo base_url().'uploads/site_logo/'.$system_values->logo; ?>"width="100" height="100"><br><p style="text-align:center; width:100px;">Site LOGO</p></div>
                                   <div class="col-sm-11">
                                   <form class="form-horizontal" method="post" action="<?php echo site_url('admin/system_setup?a=update&id='.$system_values->id); ?>" enctype="multipart/form-data">
                                   
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Shop Name</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="shop_name" value="<?php echo $system_values->shop_name; ?>" placeholder="Type Shop Name">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="email" value="<?php echo $system_values->email; ?>" placeholder="Type Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Mobile No</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="mobile_no" value="<?php echo $system_values->mobile_no; ?>" placeholder="Type Mobile Number">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-6">
                                              <textarea class="form-control" name="address" placeholder="Type Address"><?php echo $system_values->address; ?></textarea>
                                            </div>
                                        </div>








                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Owner</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="owner" value="<?php echo $system_values->owner; ?>" placeholder="Type Oner Name or Address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Upload Logo</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="file">
                                                <p>25px x 25px image size</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                              <button type="submit" class="btn btn-default pull-right">Update System</button>
                                            </div>
                                        </div>
                                        
                                    </form> 
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->