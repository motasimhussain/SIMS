<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        All Invoices
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List of all Invoices</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Item Code</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th class="text-center">Edit</th>
                                                <th class="text-center">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if ($stock_list != 'No Invoices'){ ?>
                                            
                                            <?php foreach ($stock_list as $row):?>
                                                <tr>
                                                    <td><a href="<?php echo base_url(); ?>index.php/main/stock_det/<?php echo $row->id?>/view"><?php echo $row->item_name;?></a></td>
                                                    <td><?php echo $row->item_code; ?></td>
                                                    <td><?php echo $row->qty; ?></td>
                                                    <td><?php echo $row->price;?></td>
                                                    <td class="text-center"><a href="<?php echo base_url(); ?>index.php/main/stock_det/<?php echo $row->id?>/edit" class="glyphicon glyphicon-pencil"></a></td>
                                                    <td class="text-center"><a href="<?php echo base_url(); ?>index.php/main/stock_det/<?php echo $row->id?>/delete" class="glyphicon glyphicon-remove del"></a></td>
                                                </tr>
                                            <?php endforeach; ?>

                                        <?php } else{ ?>
                                                <h3>No Items</h3>
                                        <?php } ?>
                                        </tbody>
                                       
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        