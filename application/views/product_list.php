        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Product List</a></li>
                        
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Filter Product
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <form>
                                    <div class="col-sm-3">
                                        <label>Brand</label>
                                        <select class="form-control">
                                            <option value="all">All</option>
                                            <?php foreach($brand as $row) { ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label>Category</label>
                                        <select class="form-control" onchange="onGetSubCatInSearchPage(this.value)">
                                            <option value="all">All</option>
                                            <?php foreach($cat as $row) { ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label>Sub Category</label>
                                        <select class="form-control" id="subcat-list">
                                            <option value="all">All</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label>&nbsp;</label>
                                        <input class="form-control btn btn-info" type="submit" value="Filter">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-center">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Category</th>
                                            <th>price</th>
                                            <th>Offer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $counter = 0; foreach($products as $row) { $counter++;?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $counter;?></td>
                                            <td><?php echo $row->product_title; ?></td>
                                            <td>
                                            <img src="<?php echo base_url().'uploads/product_img/'.$row->product_img; ?>"width="50" height="50">
                                            </td>
                                            <td><?php echo $this->crud->get_name_by_id('brands','name',$row->brand_id); ?></td>
                                            <td><?php echo $this->crud->get_name_by_id('category','name',$row->cat_id);; ?></td>
                                            <td><?php echo $row->price; ?> TK</td>
                                            <td>
                                            <?php if($row->offer==2){echo 'Free';} elseif($row->offer==1){echo'Discount';}else{echo'No Offer Available';}; ?>
                                            </td>
                                            
                                            
                                            
                                            
                                            <td class="center">
                                                    <a href="<?php echo site_url('admin/products?a=view&id='.$row->id); ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View">
                                                        <i class="fa fa-eye fa-fw"></i>
                                                    </a>                                            
                                                    <a href="<?php echo site_url('admin/products?a=edit&id='.$row->id); ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit fa-fw"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete this product?')" href="<?php echo site_url('admin/products?a=delete&id='.$row->id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
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