<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Invoice
            <small>Add Invoice</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <div class="box-tools">
                    <a href="<?php echo base_url() ?>index.php/main/new_inv" class="btn btn-success btn-flat pull-right">New</a>
                </div>
            </div>

            <?php if(isset($item_info)){
                    foreach ($item_info as $row2){
                        $date = $row2->date;
                        $inv_num = $row2->inv_num;
                        $supp_id = $row2->supp_id;
                        break;
                }} ?>
            <div class="box-body">

                <form class="text-center form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/validator/supp_inv">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="item_code">Date</label>  
                            <div class="col-md-4">
                                <input id="pickdate" name="date" readonly="" class="form-control text-center" type="text" value="<?php if(isset($date)){echo $date;} ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="inv_num">Invoice #</label>  
                            <div class="col-md-4">
                                <input id="inv_num" name="inv_num" placeholder="Invoice #" value="<?php if(isset($inv_num)){echo $inv_num;} ?><?php echo set_value('inv_num'); ?>" class="form-control input-md" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="item_name">Supplier</label>  
                            <div class="col-md-4">
                                <select id="supp_id" name="supp_id" class="form-control">
                                    <?php foreach($supp_list as $row){
                                        if(isset($supp_id)){
                                            if ($supp_id == $row->id){
                                    ?>
                                                <option selected value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>

                                    <?php
                                            }}else{
                                    ?>
                                        <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                    <?php }} ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="qty">Item</label>  
                            <div class="col-md-4">
                                <select id="item_id" name="item_id" class="form-control">
                                    <?php foreach($item_list as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->item_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
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

                <fieldset>
                    <table class="table table-responsive table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Invoice#</th>
                                <th>Item</th>
                                <th>Supplier</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($item_info)){
                                $num=1;
                                foreach ($item_info as $row): 
                            ?>
                            <tr>
                                <td><?php echo $num;  ?></td>
                                <td><?php echo $row->inv_num; ?></td>
                                <td><?php echo $row->item_id; ?></td>
                                <td><?php echo $row->supp_id; ?></td>
                                <td><?php echo $row->qty; ?></td>
                                <td><?php echo $row->price; ?></td>
                                <td><?php echo $row->date; ?></td>
                            </tr>
                            <?php 
                                $num+=1; 
                                endforeach;
                            } 
                            ?>
                        </tbody>
                    </table>
                </fieldset>

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