        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Setup</a></li>
                        <li><a href="#">Sub Category</a></li>
                        <li class="active">Edit Sub Category</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Sub Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                  
                                   <form class="form-horizontal" method="post" action="<?php echo site_url('admin/sub_category?a=update&id='.$sdata->id);?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Select Main Category</label>
                                            <div class="col-sm-6">
                                            <select name="cat_id" class="form-control">


<?php
$cat_id=$sdata->cat_id;
$query2 = $this->db->query("SELECT * FROM category WHERE id=$cat_id;");
foreach ($query2->result_array() as $row2)
{?>
    <option value="<?php echo $row2['id'];?>"><?php echo $row2['name'];?></option>
   
<?php
}
 ?>

 <?php

$query3 = $this->db->query("SELECT * FROM category;");
foreach ($query3->result_array() as $row3)
{?>
    <option value="<?php echo $row3['id'];?>"><?php echo $row3['name'];?></option>
   
<?php
}
 ?>

                                                
                                            </select>
                                              
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Sub Category Name</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="sub_cat_name" value="<?php echo $sdata->name; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">File input</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="file">
                                                <p>25px x 25px image size</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                              <button type="submit" class="btn btn-default pull-right">Update Sub Category</button>
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