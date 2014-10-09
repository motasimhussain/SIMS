<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Supplier
            <small>Add Supplier</small>
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

                <form class="text-center form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/validator/add_supplier">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Company Name</label>  
                            <div class="col-md-4">
                                <input id="name" name="name" placeholder="Company Name" value="<?php echo set_value('name'); ?>" class="form-control input-md" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="prefix">Prefix</label>  
                            <div class="col-md-4">
                                <input id="prefix" name="prefix" placeholder="Prefix" value="<?php echo set_value('prefix'); ?>" class="form-control input-md" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address">Address</label>  
                            <div class="col-md-4">
                                <input id="address" name="address" placeholder="Address" value="<?php echo set_value('address'); ?>" class="form-control input-md" type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="phone">Phone</label>  
                            <div class="col-md-4">
                                <input id="phone" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>" class="form-control input-md" type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="fax">Fax</label>  
                            <div class="col-md-4">
                                <input id="fax" name="fax" placeholder="Fax" value="<?php echo set_value('fax'); ?>" class="form-control input-md" type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>  
                            <div class="col-md-4">
                                <input id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" class="form-control input-md" type="email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="gst">GST</label>  
                            <div class="col-md-4">
                                <input id="gst" name="gst" placeholder="GST" value="<?php echo set_value('gst'); ?>" class="form-control input-md" type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="ntn">NTN</label>  
                            <div class="col-md-4">
                                <input id="ntn" name="ntn" placeholder="NTN" value="<?php echo set_value('ntn'); ?>" class="form-control input-md" type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="term">Term</label>  
                            <div class="col-md-4">
                                <input id="term" name="term" placeholder="Number Of Days" value="<?php echo set_value('term'); ?>" class="form-control input-md" type="text" >
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