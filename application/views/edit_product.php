        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                   <ol class="breadcrumb">

                        <li><a href="#">Dashboard</a></li>

                        <li><a href="#">Products</a></li>

                        <li><a href="#">Product Edit</a></li>

                        

                    </ol>

                </div>

                <!-- /.col-lg-12 -->

            </div>

            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            Edit Product

                        </div>

                        <div class="panel-body">

                            <div class="row">

                                <div class="col-lg-12">

                                <form class="form-horizontal" method="post" action="<?php echo site_url('admin/products?a=update&product_code='.$sdata->product_code); ?>" enctype="multipart/form-data">

                                    


                                        <div class="form-group">
                                            

                                            <label class="col-sm-3 control-label"></label>

                                            <div class="col-sm-9">

<img src="<?php echo base_url().'uploads/product_img/'.$sdata->product_img; ?>" width="240" height="240">

                                            </div>

                                        </div>



                                        <div class="form-group">
                                            

                                            <label class="col-sm-3 control-label">Change Image</label>

                                            <div class="col-sm-9">

                                                <input type="file" name="file">

                                                <p>25px x 25px image size</p>

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Title</label>

                                            <div class="col-sm-6">

                                              <input type="text" class="form-control" name="name" placeholder="Type Product Name" value="<?php echo $sdata->name;?>">

                                            </div>

                                        </div>




                                         <div class="form-group">

                                            <label class="col-sm-3 control-label">Select Category</label>

                                            <div class="col-sm-6">

                                            <select name="cat_id" class="form-control" onchange="onGetSubCatByCat(this.value)">

                                                <option value="<?php echo $sdata->cat_id;?>"><?php echo $this->crud->get_name_by_id('category','name',$sdata->cat_id);?></option>

                                                <?php foreach($cats as $row) { ?>

                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>

                                                <?php } ?>

                                            </select>

                                              

                                            </div>

                                        </div>

                                         <div class="form-group" id="subcat-form-group" style="">

                                            <label class="col-sm-3 control-label">Select Sub Category</label>

                                            <div class="col-sm-6">

                                                <select name="sub_cat_id" class="form-control" id="subcat-list">

                                                 <option value="<?php echo $sdata->sub_cat_id;?>"><?php echo $this->crud->get_name_by_id('sub_category','name',$sdata->sub_cat_id);?> </option>  

                                                </select>

                                            </div>

                                        </div>

                                         <div class="form-group">

                                            <label class="col-sm-3 control-label">Select Brand</label>

                                            <div class="col-sm-6">

                                            <select name="brand_id" class="form-control">

                                                <option value="<?php echo $sdata->brand_id;?>"><?php echo $this->crud->get_name_by_id('brands','name',$sdata->brand_id);?></option>

                                                <?php foreach($brands as $row) { ?>

                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>

                                                <?php } ?>

                                            </select>

                                              

                                            </div>


                                        </div>

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Description</label>

                                            <div class="col-sm-6">

                                              <textarea class="form-control add-editor" name="description" placeholder="Type Product Description"><?php echo $sdata->description;?></textarea>

                                            </div>

                                        </div>


                                       <div class="form-group">

                                            <label class="col-sm-3 control-label">Product Overview</label>

                                            <div class="col-sm-6">

                                              <textarea class="form-control add-editor" name="product_overview" placeholder="Type Product Description"><?php echo $sdata->product_overview;?></textarea>

                                            </div>

                                        </div>  


                                         <div class="form-group">

                                            <label class="col-sm-3 control-label">Old Price</label>

                                            <div class="col-sm-6">

                                              <input type="text" class="form-control" name="old_price" placeholder="Type Old Price" value="<?php echo $sdata->old_price;?>">

                                            </div>

                                        </div>                                                                              

                                        

                                         <div class="form-group">

                                            <label class="col-sm-3 control-label">Price</label>

                                            <div class="col-sm-6">

                                              <input type="text" class="form-control" name="price" placeholder="Type Price" value="<?php echo $sdata->price;?>">

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">New Arrival?</label>

                                            <div class="col-sm-6">

                                                <label class="radio-inline">

                                                <input type="radio"  name="new_arrival" value="1"> Yes

                                                </label>

                                                <label class="radio-inline">

                                                <input type="radio" name="new_arrival" value="0"> No

                                                </label>

                                          

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Offer</label>

                                            <div class="col-sm-6">

                                            <select name="discount" class="form-control" onchange="onSelectDisFreeProduct(this.value)">

                                                <option value="0">No Offer</option>

                                                <option value="1">Discount</option>

                                                <option value="2">Free Product</option>

                                            </select>

                                              

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Discount(%)</label>

                                            <div class="col-sm-6">

                                              <input type="text" class="form-control" name="discount_percentance" placeholder="Type Percentance" value="<?php echo $sdata->percentance;?>">

                                            </div>

                                        </div>



                                         <div class="form-group">

                                            <label class="col-sm-3 control-label">Free Product</label>

                                            <div class="col-sm-6" style="border: 1px solid #cccccc; padding-top:10px;">



                                            

                                                <input type="text" class="form-control" name="free_product_name" placeholder="Type Free Product Name" value="<?php echo $sdata->free_product_name;?>">

                                                <br> 

                                                

                                                    <label class="col-sm-3 control-label">Short Description</label>

                                                

                                                <div class="col-sm-9">

                                                    <textarea class="form-control" name="free_product_short_desc" placeholder="Type Free Product Description"><?php echo $sdata->free_product_short_description;?></textarea>

                                                </div>

                                                <br><br><br><br>

                                                <div class="form-group">

                                                    <label class="col-sm-3 control-label">Upload Image</label>

                                                    <div class="col-sm-9">

                                                        <input type="file" name="file2">

                                                        <p>25px x 25px image size</p>

                                                    </div>

                                                </div>







                                            </div>

                                           

                                        </div>

                                      
                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Status</label>

                                            <div class="col-sm-6">

                                            <select name="product_status" class="form-control">

                                                <option value="<?php echo $sdata->product_status;?>"><?php if ($sdata->product_status==1){echo "Enable";} else {echo "Disable";}?> </option> 

                                                <option value="1">Enable</option>

                                                <option value="0">Disable</option>

                                           </select>

                                              

                                            </div>

                                        </div>
                                       

                                      

                                        <div class="form-group">

                                            <div class="col-sm-offset-3 col-sm-6">

                                              <button type="submit" class="btn btn-default pull-right">Update</button>

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