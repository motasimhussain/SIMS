<!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>     

                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="<?php echo $dash; ?>">
                            <a href="<?php echo base_url(); ?>index.php/main/home">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="<?php echo $c_po; ?>">
                            <a href="<?php echo base_url(); ?>index.php/main/create_po">
                                <i class="fa fa-bar-chart-o"></i> <span>Create Purchase Order</span>
                            </a>
                        </li>
                        <li class="treeview <?php echo $acc; ?>">
                            <a href="#">
                                <i class="fa fa-desktop"></i>
                                <span>Accounts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>index.php/main/add_customer"><i class="fa fa-angle-double-right"></i> Add Customer</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/main/add_supplier"><i class="fa fa-angle-double-right"></i> Add Supplier</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo $stock; ?>">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Stock</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>index.php/main/stock"><i class="fa fa-angle-double-right"></i> Add Items</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php echo $inv; ?>">
                            <a href="#">
                                <i class="fa fa-building-o"></i>
                                <span>Invoice</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>index.php/main/supp_inv"><i class="fa fa-angle-double-right"></i> Add Invoice</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>