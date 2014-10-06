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
            <form class="form-horizontal">
                <fieldset>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="po_det">PO Detail#:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="po_det" name="po_det">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textinput">Date:</label>
                            <div class="col-md-7" >
                                <input id="pickdate" name="date" readonly="" class="form-control input-md" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="cmp_name">Customer:</label>
                            <div class="col-md-7">
                                <select id="cmp_name" name="cmp_name" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="supplier">Supplier:</label>
                            <div class="col-md-7">
                                <select id="supplier" name="supplier" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="item">Item:</label>
                            <div class="col-md-7">
                                <select id="item" name="item" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="unit">Unit:</label>
                            <div class="col-md-7">
                                <select id="unit" name="unit" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="qty">Quantity:</label>
                            <div class="col-md-7">
                                <input class="form-control" id="qty" name="qty">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="u_price">Unit Price:</label>
                            <div class="col-md-7">
                                <input class="form-control" id="u_price" name="u_price">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="t_price">Total Amount:</label>
                            <div class="col-md-7">
                                <input class="form-control" id="t_price" name="t_price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="supp_po">PO#:</label>
                            <div class="col-md-7">
                                <input class="form-control" id="supp_po" name="supp_po">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="lnd_cost">Landed Cost:</label>
                            <div class="col-md-7">
                                <input class="form-control" id="lnd_cost" name="lnd_cost">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="grn">GRN:</label>
                            <div class="col-md-7">
                                <input class="form-control" id="grn" name="grn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="dc_num">Delivery Challan#:</label>
                            <div class="col-md-7">
                                <input class="form-control" id="dc_num" name="dc_num">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="bill_num">Bill#:</label>
                            <div class="col-md-7">
                                <input class="form-control" id="bill_num" name="bill_num">
                            </div>
                        </div>
                    </div>

                    
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-flat btn-success">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            </div><!-- /.box-body -->
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->