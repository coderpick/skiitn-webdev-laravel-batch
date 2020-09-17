<?php 
    include 'layouts/head.php'
 ?>
<div class="wrapper">
<?php 
    include 'layouts/header.php'

 ?>
<?php 
   $filepath = realpath(dirname(__FILE__));
    include($filepath.'/../Classes/Brand.php') ;

    $brandobj = new Brand();
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
              <a href="addBrand.php" class="btn btn-success pull-right">Add new Brand</a>
              <h3 class="box-title">Brand List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php 
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                       $deletebrand =  $brandobj->delete($id);
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
                  <th>Brand Name</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php 
                   
                      $brandlist = $brandobj->show();

                      if ($brandlist) {
                        $i = 1;
                          foreach ( $brandlist as $row) {?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row['brandname']; ?></td>
                                  <td><?php echo $row['status']; ?> </td>                 
                                  <td>
                                     <a href="editbrand.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
                                     <a onclick="return confirm('Are you sure to delete?')" href="?id=<?php echo $row['id'];?>" class="btn btn-warning">Delete</a>
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