<?php 
    include 'layouts/head.php'
 ?>
<div class="wrapper">
<?php 
    include 'layouts/header.php'

 ?>
<?php 
   $filepath = realpath(dirname(__FILE__));
    include($filepath.'/../Classes/Contact.php') ;

    $con = new Contact();
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

              <h3 class="box-title">Contact List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
                  if (isset($_GET['delid']) && $_GET['delid'] !='') {
                      $id   = $_GET['delid'];
                     $delcontact = $con->deleteContact($id);
                  }
               ?>

             <?php 
                  if (isset($_GET['id']) && $_GET['id'] !='') {
                      $id   = $_GET['id'];
                     $statusupdate = $con->UpdateMessageStatus($id);
                  }
               ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile no.</th>
                  <th>Message</th>
                  <th>Status</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                  <?php 
                   
                      $contactlist = $con->show();

                      if ($contactlist) {
                        $i = 1;
                          foreach ($contactlist as $row) {?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['email']; ?></td> 
                                  <td><?php echo $row['mobile']; ?></td>
                                  <td><?php echo $row['message']; ?></td>
                                  <td><?php 
                                      if ($row['status'] == 0) {?>
                                        <a class="btn btn-warning" href="?id=<?php echo $row['id']?>">Unseen</a>
                                   <?php    }else{?>
                                        <button class="btn btn-success">Seen</button>
                                  <?php   }
                                   ?></td>                 
                               
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
     <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

              <h3 class="box-title">Seen Contact List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
                  if (isset($delcontact)) {
                      echo $delcontact;
                  }
               ?>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile no.</th>
                  <th>Message</th>
                  <th>Status</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php 
                   
                      $contactlist = $con->showSeenMessage();

                      if ($contactlist) {
                        $i = 1;
                          foreach ($contactlist as $row) {?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['email']; ?></td> 
                                  <td><?php echo $row['mobile']; ?></td>
                                  <td><?php echo $row['message']; ?></td>
                                  <td>
                                    <?php 
                                          if ($row['status'] == 1) {?>
                                          <a class="btn btn-danger" href="?delid=<?php echo $row['id']?>">Remove</a>   
                                     <?php      }
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