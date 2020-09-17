<?php 
    include 'layouts/head.php'
 ?>
<div class="wrapper">
<?php 
    include 'layouts/header.php'

 ?>
<?php 
   $filepath = realpath(dirname(__FILE__));
    include($filepath.'/../Classes/Category.php') ;

    $cat = new Category();
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
              <a href="addCategory.php" class="btn btn-success pull-right">Add new Category</a>
              <h3 class="box-title">Category List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php 
                    if (isset($_GET['delcat'])) {
                        $catId = $_GET['delcat'];
                       $deletecategory =  $cat->catDelById($catId);
                    }
                  ?>
                  <?php 
                    if (isset($deletecategory)) {
                      echo  $deletecategory;
                    }
                   ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php 

                    
                      $categorylist = $cat->showCategory();

                      if ($categorylist) {
                        $i = 1;
                          foreach ( $categorylist as $row) {?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row['category_name']; ?></td>
                                  <td><?php echo $row['status']; ?> </td>                 
                                  <td>
                                     <a href="editcat.php?catId=<?php echo $row['catId'];?>" class="btn btn-success">Edit</a>
                                     <a onclick="return confirm('Are you sure to delete?')" href="?delcat=<?php echo $row['catId'];?>" class="btn btn-warning">Delete</a>
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