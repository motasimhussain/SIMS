         <script src="<?=base_url(); ?>js/jquery-2.1.0.min.js"></script>


 <?php
 if(!isset($action))
$action = "view";
if($action == "edit"):
    ?>

<script type="text/javascript">
$(function(){
    $("input[type=text]").removeAttr('disabled');

});
</script>
<?php
endif;
 foreach ($detail as $row): 

;?>

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Item Profile
                        <small>Preview</small>
                    </h1>
                    <!-- <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
                    </ol> -->
                </section>
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        </div><!--/.col (left) -->
                        <!-- right column -->

                        <!-- general form elements  -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Company Profile</h3>
                                </div><!-- /.box-header -->
                                                                        <div class="clearfix">
                                            <hr>
                                        </div>
                                <div class="box-body">

                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/validator/edit_supp_inv" method="post">
                                    <fieldset>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="inv_num">Invoice Number</label>
                                        <div class="col-md-7">
                                        <input disabled id="inv_num" name="inv_num" value="<?php echo $row->inv_num;?>" class="form-control input disabled-md" type="text"  >
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="item_id">Item ID</label>
                                        <div class="col-md-7">
                                        <input disabled id="item_id" name="item_id" value="<?php echo $row->item_id;?>" class="form-control input disabled-md" type="text" >
                                          
                                        </div>
                                      </div>
                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="supp_id">Supplier ID</label>
                                        <div class="col-md-7">
                                        <input disabled id="supp_id" name="supp_id" value="<?php echo $row->supp_id;?>" class="form-control input disabled-md"  type="text">
                                        <span class="help-block"> </span>
                                        </div>
                                      </div>
                                      </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="qty">Quantity</label>
                                        <div class="col-md-7">
                                        <input disabled id="qty" name="qty" value="<?php echo $row->qty;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="price">Price</label>
                                        <div class="col-md-7">
                                        <input disabled id="price" name="price" value="<?php echo $row->price;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                                                            <div class="form-group">
                                        <label class="col-md-4 control-label" for="date">Date</label>
                                        <div class="col-md-7">
                                        <input disabled id="date" name="date" value="<?php echo $row->date;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                  </div>

                                        <div class="clearfix">
                                            <hr>
                                        </div>


          

                                    </fieldset>
                                <?php if($action == "edit"):?>
                                    <div class="row">
                                    <fieldset>
                                       <div class="form-group">
                                          <div class="col-md-2 pull-right">
                                            <button type="sumbit" class="btn btn-primary" name="singlebutton" id="singlebutton">Add</button>
                                          </div>
                                        </div>

                                    </fieldset>
                                <?php endif;?>
                                    </div>
                                    <input hidden type="text" name="id" value="<?php echo $id ?>">
                                  </form>
</section>
</aside>
<?php endforeach; ?>