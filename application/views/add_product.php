        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Product Add</a></li>
                        
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Product
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   <form class="form-horizontal" method="post" action="<?php echo site_url('admin/products?a=save'); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="title" placeholder="Type Product Title">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Select Category</label>
                                            <div class="col-sm-6">
                                            <select name="cat" class="form-control" onchange="onGetSubCatByCat(this.value)">
                                                <option value="">-- select --</option>
                                                <?php foreach($cat as $row) { ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                                <?php } ?>
                                            </select>
                                              
                                            </div>
                                        </div>
                                         <div class="form-group" id="subcat-form-group" style="display: none;">
                                            <label class="col-sm-3 control-label">Select Sub Category</label>
                                            <div class="col-sm-6">
                                                <select name="sub_cat" class="form-control" id="subcat-list">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Select Brand</label>
                                            <div class="col-sm-6">
                                            <select name="brand" class="form-control">
                                                <option value="20170922072708-127001-100">-- select --</option>
                                                <?php foreach($brand as $row) { ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                                <?php } ?>
                                            </select>
                                              
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-6">
                                              <textarea class="form-control add-editor" name="description" placeholder="Type Product Description"></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Price</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="price" placeholder="Type Price">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">New Arrival?</label>
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="radio" name="new_arrival" checked="checked" value="0"> No
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio"  name="new_arrival" value="1"> Yes
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Upload Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="file">
                                                <p>25px x 25px image size</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Discount/Free</label>
                                            <div class="col-sm-6">
                                            <select name="offer" class="form-control" onchange="onSelectDisFreeProduct(this.value)">
                                                <option value="0">No Offer</option>
                                                <option value="1">Discount</option>
                                                <option value="2">Free Product</option>
                                            </select>
                                              
                                            </div>
                                        </div>

                                        <div class="form-group" id="discount-form-group" style="display: none;">
                                            <label class="col-sm-3 control-label">Discount(%)</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="discount_percentance" placeholder="Type Percentance">
                                            </div>
                                        </div>

                                         <div class="form-group" id="free-product-form-group" style="display: none;">
                                            <label class="col-sm-3 control-label">Free Product</label>
                                            <div class="col-sm-6" style="border: 1px solid #cccccc; padding-top:10px;">

                                            
                                                <input type="text" class="form-control" name="free_product" placeholder="Type Free Product Name">
                                                <br>
                                                
                                                    <label class="col-sm-3 control-label">Short Description</label>
                                                
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="free_product_des" placeholder="Type Free Product Description"></textarea>
                                                </div>
                                                <br><br><br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Upload Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" name="free_pro_img">
                                                        <p>25px x 25px image size</p>
                                                    </div>
                                                </div>



                                            </div>
                                           
                                        </div>
                                      
                                       
                                      
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                              <button type="submit" class="btn btn-default pull-right">Add Product</button>
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