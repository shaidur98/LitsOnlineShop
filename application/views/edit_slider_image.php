        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Slider</a></li>
                        <li><a href="#">Edit Slider Image</a></li>
                       
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Slider Image
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                   <form class="form-horizontal" method="post" action="<?php echo site_url('admin/slider_images?a=update&id='.$sdata->id); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Image Title</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="img_title" value="<?php echo $sdata->img_title; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Upload Image</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="file">
                                                <p>25px x 25px image size</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                              <button type="submit" class="btn btn-default pull-right">Update Image</button>
                                            </div>
                                        </div>
                                    </form> 
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