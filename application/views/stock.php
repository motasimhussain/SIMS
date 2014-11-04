<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Item
            <small>Add Item</small>
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

                <form class="text-center form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/validator/add_stock">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="item_name">Item Name</label>  
                            <div class="col-md-4">
                                <input id="item_name" name="item_name" placeholder="Item Name" value="<?php echo set_value('item_name'); ?>" class="form-control input-md" type="text" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="item_code">Item Code</label>  
                            <div class="col-md-4">
                                <input id="item_code" name="item_code" placeholder="Item Code" value="<?php echo set_value('item_code'); ?>" class="form-control input-md" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="qty">Quantity</label>  
                            <div class="col-md-4">
                                <input id="qty" name="qty" placeholder="Quantity" value="<?php echo set_value('qty'); ?>" class="form-control input-md" type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="price">Unit Price</label>  
                            <div class="col-md-4">
                                <input id="price" name="price" placeholder="Price" value="<?php echo set_value('price'); ?>" class="form-control input-md" type="text" >
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <button class="btn btn-success btn-flat btn-custom" type="submit">Submit</button>
                        </div>
                            
                    </fieldset>
                </form>
                <?php if(isset($err)): ?>
                <div class="row text-center ">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="alert alert-danger">
                            <?php echo validation_errors(); ?>
                        </div>
                        
                    </div>
                </div>
                <?php endif; ?>

            </div><!-- /.box-body -->
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->