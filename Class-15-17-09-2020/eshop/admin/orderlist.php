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

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">   
              <h3 class="box-title">Order List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php 
                    if (isset($_GET['cmrId'])) {
                       $cmrId = $_GET['cmrId'];
                       $deloder=$ct->DeleteCoustomerOder($cmrId);
                    }
             ?> 
             <?php 
                if (isset($delOrder)) {
                  echo $delOrder;
                }
              ?>                  
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Custormer Name</th>
                  <th>Product Name</th>
                  <th> Quantity</th>
                  <th> Price</th>
                  <th> Order Date</th>
                  <th width="12%">Status</th>
                
                </tr>
                </thead>
                 
                <tbody>
                  <?php 
                   
                      $orderlist = $ct->getAllOrderProduct();

                      if ($orderlist) {
                        $i = 1;
                          foreach ( $orderlist as $row) {?>
                          <!-- productId`, `productName`, `quantity`, `price`, `image`, `orderdate`, `status` FROM `tbl_order` WHERE 1 -->
                                <tr>
                                  <td> <?php echo $i++; ?></td>
                                  <td> <?php echo $row['name']; ?></td>
                                  <td> <?php echo $row['productName']; ?> </td>                 
                                  <td> <?php echo $row['quantity']; ?> </td>
                                  <td> <?php echo $row['price']; ?> </td>
                                  <td> <?php echo $row['orderdate']; ?> </td>
                                  <td>
                                    <?php 
                                        if ($row['status'] == 0 ) {?>
                                         <a class="btn btn-warning" href="coustomerinvoice.php?cmrId=<?php echo $row['id']?>">Pending</a>
                                     <?php   
                                       }else{?>
                                          <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                         
                                          <a onclick="return confirm('Are you sure to delete this order?')" class="btn btn-danger btn-sm" href="?cmrId=<?php echo $row['id']?>"><i class="fa fa-trash"></i></a>
                                       <?php    }
                                     ?>
                                 
                                 </td>
                                </tr>
                         <?php     }
                      }
                   ?>
              
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

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