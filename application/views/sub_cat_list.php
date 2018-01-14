        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Setup</a></li>
                        <li><a href="#">Sub Category</a></li>
                        <li class="active">Sub Category List</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sub Category List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-center">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Sub Category Name</th>
                                            <th>Main Category</th>
                                            <th>Icon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $counter = 0; foreach($sub_cats as $row) { $counter++;?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $counter; ?></td>
                                            <td><?php echo $row->name; ?></td>
                                            <td>
                                            <?php echo $this->crud->get_name_by_id('category','name',$row->cat_id); ?>
                                            </td>
                                            <td class="center"><img src="<?php echo base_url().'uploads/icon/'.$row->icon; ?>"width="50" height="50"></td>
                                            <td class="center">
                                                    <a href="<?php echo site_url('admin/sub_category?a=edit&id='.$row->id); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit fa-fw"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete this category?')" href="<?php echo site_url('admin/sub_category?a=delete&id='.$row->id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
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