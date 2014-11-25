<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Enter Purchase Order
            <small>Enter PO</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <div class="box-body">
            <a class="btn btn-danger btn-flat btn-custom" href="">Back</a>
            <a class="btn btn-primary btn-flat btn-custom pull-right" href="<?php echo base_url() ?>index.php/main/new_po">New</a>
            <form class="form-horizontal text-center" method="POST" action="<?php echo base_url(); ?>index.php/validator/add_po_in">
                <fieldset>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        
                        
                    </div>

                    <?php if (isset($po_info)): ?>
                        <?php foreach ($po_info as $row): ?>
                            <?php 
                                $pod_num = $row->pod_num;
                                $po_num_in = $row->po_num_in;
                                $big_date = $row->big_date;
                                $customer_id = $row->customer_id;
                             ?>
                        <?php endforeach ?>
                    <?php endif ?>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="pod_num">PO Detail#:</label>
                            <div class="">
                                <input type="text" class="form-control text-center" id="pod_num" name="pod_num" value="<?php if(isset($pod_num)) echo $pod_num; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="po_num_in">Customer PO#:</label>
                            <div class="">
                                <input type="text" class="form-control text-center" id="po_num_in" name="po_num_in" value="<?php if(isset($po_num_in)) echo $po_num_in; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pull-right">
                        <div class="form-group">
                            <label class=" control-label" for="po_date">Date:</label>
                            <div class="" >
                                <input id="reservation" name="po_date" readonly="" class="form-control text-center" type="text" value="<?php if(isset($big_date)) echo $big_date; ?>" required>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                            <label class="control-label" for="customer_id">Customer:</label>
                            <div class="">
                                <?php foreach($cust_list as $row): ?>
                                <select id="customer_id" name="customer_id" class="form-control text-center">
                                    <?php if(isset($customer_id) && $row->id == $customer_id){ ?>
                                        <option value="<?php echo $row->id; ?>" selected><?php echo $row->name; ?></option>
                                    <?php }else{ ?>
                                        <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                    <?php } ?>
                                </select>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </fieldset>
                
                <fieldset>
                <div class="col-md-12">
                <div class="form-group">
                <table class="table table-responsive table-bordered table-condensed text-center">
                    <thead>
                        <tr>
                            <th>S/No.</th>
                            <th>Item Description</th>
                            <th>Unit</th>
                            <th>Qty</th>
                            <th>U/Price</th>
                            <th>TTL/Amount</th>
                            <th>Supplier</th>
                            <th>Supp PO#</th>
                            <th>LC#</th>
                            <th>GRN#</th>
                            <th>DC#</th>
                            <th>Bill#</th>
                            <th>Add/Edit</th>
                            <th>Del</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $snum=0; 
                        if(isset($po_det)): 
                    ?>
                        <?php 
                            foreach($po_det as $row): 
                                $snum++;
                        ?>
                            <tr>
                                <td><?php echo($snum); ?></td>
                                <td>item goes here</td>
                                <td>kg</td>
                                <td>3</td>
                                <td>1000</td>
                                <td>3000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="">004354</a></td>
                                <td><a href="">099474</a></td>
                                <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                                <td><a href="#" class="glyphicon glyphicon-remove"></a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                        <tr>
                            <td><?php echo $snum+1 ; ?></td>
                            <td class="col-md-2">
                                <select id="item_desc" name="item_desc" class="form-control">
                                    <?php if(isset($item_lst)): ?>
                                        <?php foreach($item_lst as $row): ?>
                                            <option value="<?php echo $row->id; ?>"><?php echo($row->item_name); ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                            <td class="" width="80px">
                                <select id="unit" name="unit" class="form-control">
                                    <option>PC</option>
                                    <option>KG</option>
                                    <option>LT</option>
                                    <option>GM</option>
                                    <option>MG</option>
                                    <option>ML</option>
                                    <option>TN</option>
                                </select>
                            </td>
                            <td class=""><input type="text" class="form-control" id="qty" name="qty"></td>
                            <td class=""><input type="text" class="form-control" id="u_price" name="u_price"></td>
                            <td class=""><input type="text" class="form-control" id="t_amnt" name="t_amnt"></td>
                            <td class="col-md-2">
                                <select id="supplier_id" name="supplier_id" class="form-control">
                                    <?php foreach($supp_list as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class=""><input type="text" class="form-control" id="po_num_out" name="po_num_out"></td>
                            <td class=""><a href="">Create</a></td>
                            <td class=""><a href="">Create</a></td>
                            <td class=""><a href="<?php echo base_url(); ?>index.php/main/create_dc">Create</a></td>
                            <td class=""><a href="">Create</a></td>
                            <td class=""><a href="#" class="glyphicon glyphicon-plus"></a></td>
                            <td class=""><a href="#" class="glyphicon glyphicon-remove"></a></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-flat btn-success btn-custom">Submit</button>
                            <a class="btn btn-default btn-flat btn-custom pull-right" href="<?php echo base_url(); ?>index.php/main/print_po"><span class="glyphicon glyphicon-print"></span> Print</a>
                        </div>
                    </div>
                </fieldset>
            </form>
            </div><!-- /.box-body -->
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->