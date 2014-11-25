<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Delivery Address
            <small>Add Delivery Address</small>
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

                <form class="text-center form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/validator/c_address">
                    <fieldset>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address">Customer: </label>  
                            <div class="col-md-4">
                                <select id="customer_id" name="customer_id" class="form-control text-center">
                                    <?php foreach($cust_list as $row): ?>
                                        <option value="<?php echo $row->id; ?>" ><?php echo $row->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address">Address</label>  
                            <div class="col-md-4">
                                <textarea rows="3" class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-flat btn-custom" type="submit">Submit</button>
                        </div>
                            
                    </fieldset>
                </form>

            </div><!-- /.box-body -->
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->