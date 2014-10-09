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
            <a class="btn btn-primary btn-flat btn-custom pull-right" href="">New</a>
            <form class="form-horizontal text-center">
                <fieldset>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        
                        
                    </div>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="po_det">PO Detail#:</label>
                            <div class="">
                                <input type="text" class="form-control text-center" id="po_det" name="po_det">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="po_det">PO#:</label>
                            <div class="">
                                <input type="text" class="form-control text-center" id="po_in_num" name="po_det">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pull-right">
                        <div class="form-group">
                            <label class=" control-label" for="textinput">Date:</label>
                            <div class="" >
                                <input id="pickdate" name="date" readonly="" class="form-control text-center" type="text" value="">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                            <label class="control-label" for="cmp_name">Customer:</label>
                            <div class="">
                                <?php foreach($cust_list as $row): ?>
                                <select id="cmp_name" name="cmp_name" class="form-control text-center">
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
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
                            <th>PO#</th>
                            <th>LC</th>
                            <th>GRN</th>
                            <th>DC#</th>
                            <th>Bill#</th>
                            <th>Add/Edit</th>
                            <th>Del</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
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
                        <tr>
                            <td><p>2</p></td>
                            <td class="col-md-2"><select id="supplier" name="supplier" class="form-control"></select></td>
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
                            <td class=""><input type="text" class="form-control" id="po_det" name="po_det"></td>
                            <td class=""><input type="text" class="form-control" id="po_det" name="po_det"></td>
                            <td class=""><input type="text" class="form-control" id="po_det" name="po_det"></td>
                            <td class="col-md-2">
                                <select id="supplier" name="supplier" class="form-control">
                                    <?php foreach($supp_list as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class=""><input type="text" class="form-control" id="po_det" name="po_det"></td>
                            <td class=""><input type="text" class="form-control" id="po_det" name="po_det"></td>
                            <td class=""><input type="text" class="form-control" id="po_det" name="po_det"></td>
                            <td class=""><a href="">Create</a></td>
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