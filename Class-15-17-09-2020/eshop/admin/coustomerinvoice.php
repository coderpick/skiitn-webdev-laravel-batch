<?php 
    include 'layouts/head.php'
 ?>
<div class="wrapper">
<?php 
    include 'layouts/header.php'

 ?>
<?php 
   $filepath = realpath(dirname(__FILE__));
    include($filepath.'/../Classes/Cart.php') ;

    $ct = new Cart();
 ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <?php 
      include 'layouts/leftsidebar.php'
   ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  <?php 
          if(isset($_GET['cmrId'])) {
                $cmrId = $_GET['cmrId'];
              }
   ?>
    <!-- Main content -->
  <script>
        function printContent(el){
          var restorepage = document.body.innerHTML;
          var printcontent = document.getElementById(el).innerHTML;
          document.body.innerHTML = printcontent;
          window.print();
          document.body.innerHTML = restorepage;
        }
  </script>
 
    <section class="content">   
    <div id="invoice">
       <h4 style="float: left;">Invoice ID: 2018<?php echo $cmrId; ?></h4>
       <h4 style="float: right">Date: <?php echo date('d-m-Y'); ?></h4>
       <p style="clear: fixed"></p>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-header">               
              <div style="width: 45%; float: left;">
                 <div class="address">
                    <h3>Bill To</h3>
                    <hr>
                    <table class="table table-bordered">
                      <tr>
                        <th>Name</th>
                         <td>Hafizur</td>
                      </tr>
                      <tr>
                        <th>Address</th>
                         <td>Green Raad, Dhaka-1209</td>
                      </tr>
                      <tr>
                        <th>Mobile</th>
                         <td>01755-355745</td>
                      </tr>
                    </table>
                 </div>
             </div>
             <div  style="width: 45%; float: right;">
                <div class="address">
                    <h3>Shiping Address</h3>
                      <hr>
                    <table class="table table-bordered">
                        <?php                       
                                   
                                 
                                 $getcustormer = $ct->GetCustomerinfo($cmrId);
                                 $orderupdate  = $ct->CustomerOderupdate($cmrId);
                                  if($getcustormer)
                                  {                                    
                                      while ($row = $getcustormer->fetch_assoc()) {?>
                               
                                    <tr>
                                      <th>Name</th>
                                       <td><?php echo $row['name']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Address</th>
                                       <td><?php echo $row['address']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Mobile</th>
                                       <td><?php echo $row['mobile']; ?></td>
                                    </tr>
                                <?php 
                                          }  
                                   }
                               
                                  ?>
                            
                    </table>
                 </div>
             </div>
               <div style="clear:both;"></div> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <div class="cartpage">       
                      <table class="table table-bordered">
                        <tr>
                          <th>SN.</th>
                          <th width="20%">Product Name</th>                        
                          <th width="15%">Price</th>
                          <th width="25%">Quantity</th>
                          <th width="20%">Total Price</th>                         
                        </tr>
                            <?php 
                             if(isset($_GET['cmrId'])) {

                                $cmrId = $_GET['cmrId'];

                                $getcustormerProducnt = $ct->GetCustomerProduct($cmrId);

                                 if($getcustormerProducnt)
                                        {
                                          $i = 1;
                                          $sum = 0;
                                          $qty = 0;
                                          while($row = $getcustormerProducnt->fetch_assoc()){?>

                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row['productName'] ?></td>
                               
                                  <td>Tk. <?php echo $row['price'] ?></td>
                                  <td>
                                         <?php echo $row['quantity'] ?>
                                  </td>
                                  <td>
                                    <?php 
                                      $total = $row['price'] * $row['quantity'];
                                      echo $total;
                                     ?>
                                  </td>

                            </tr>

                                  <?php 
                                              $qty = $qty + $row['quantity'];
                                    $sum = $sum + $total;


                              }
                            }

                           }?>
                      </table>
                      <?php 
                        if (isset($sum)) {?>
                          
                      
                      <table  style="float:right;text-align:left;" width="40%">
                        <tr>
                          <th>Sub Total : </th>
                          <td>TK. <?php echo $sum; ?></td>
                        </tr>
                        <tr>
                          <th>VAT : </th>
                          <td>10%</td>
                        </tr>
                        <tr>
                          <th>Payable Amount :</th>
                          <td>
                            TK. <?php  
                             $vat = $sum * 0.1;
                                               $grandtotal = $sum+$vat;
                                               echo $grandtotal;
                            ?> 
                          </td>
                        </tr>
                       </table>
                       <?php  
                        }
                        else
                        {
                          echo "Please buy some products";
                        }
                       ?>
                    </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>
          
          <div style="width: 48%;float: left;text-align: center;">
            ................................................
            <h5>Authourity Signature</h5>
          </div>
          <div style="width: 48%;float: right;text-align: center;">
            ................................................
            <h5>Custormer Signature</h5>
          </div>
             
      </div>
      <!-- /.row -->
      <br>

          <p class="text-center">
            <button onclick="printContent('invoice')" class="btn btn-info btn-lg">Print Invoice</button>
         </p>
  </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php 
    include 'layouts/footer.php'
 ?>