        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Slider</a></li>
                        <li><a href="#">All Images</a></li>
                        
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Images
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-center">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $counter = 0; foreach($images as $row) { $counter++;?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $counter; ?></td>
                                            <td class="center"><img src="<?php echo base_url().'uploads/slider_img/'.$row->img_name; ?>"width="50" height="50"></td>
                                           <td><?php echo $row->img_title; ?></td>
                                            <td class="center">
                                                <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View">
                                                    <i class="fa fa-eye fa-fw"></i>
                                                </button>
                                                <a href="<?php echo site_url('admin/slider_images?a=edit&id='.$row->id); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit fa-fw"></i>
                                                    </a>
                                                <a onclick="return confirm('Are you sure you want to delete this category?')" href="<?php echo site_url('admin/slider_images?a=delete&id='.$row->id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fa fa-trash fa-fw"></i>
                                                    </a>
                                            </td>
                                        </tr>
                                     
                                       
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
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