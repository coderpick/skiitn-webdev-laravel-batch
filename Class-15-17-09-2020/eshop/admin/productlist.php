<?php 
    include 'layouts/head.php'
 ?>
<div class="wrapper">
<?php 
    include 'layouts/header.php'

 ?>
<?php 
   $filepath = realpath(dirname(__FILE__));
    include($filepath.'/../Classes/Product.php') ;

    $pro = new Product();
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
              <a href="addprodcut.php" class="btn btn-success pull-right">Add new Product</a>
              <h3 class="box-title">Product List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php 
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                       $deletebrand =  $pro->delete($id);
                    }
                  ?>
                  <?php 
                    if (isset($deletebrand)) {
                      echo  $deletebrand;
                    }
                   ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Product name</th>
                  <th>Category Name</th>
                  <th>Brand Name</th>
                  <th>Type</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th width="10%">Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php 

                      $prolist = $pro->show();

                      if ($prolist) {
                        $i = 1;
                          foreach ( $prolist as $row) {?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row['product_name']; ?></td>
                                  <td><?php echo $row['category_name']; ?> </td>                 
                                  <td><?php echo $row['brandname']; ?> </td>                 
                                  <td><?php echo $row['type']; ?> </td>                 
                                  <td><img src="<?php echo $row['image']; ?>" width="60" alt=""> </td>                 
                                  <td><?php echo $row['status']; ?> </td>                 
                                  <td>
                                     <a href="editprodcut.php?id=<?php echo  base64_encode($row['id']);?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                     <a onclick="return confirm('Are you sure to delete?')" href="?id=<?php echo $row['id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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