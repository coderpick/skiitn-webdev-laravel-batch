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
  
      <div class="container">
         <div class="row">
           <div class="col-md-8 col-md-offset-2">
            
              <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $id       = $_POST['id'];
                        $category = $_POST['category'];                
                        $status   = $_POST['status'];

                     
                     $categoryupdate= $cat->CatUpdate($category,$status,$id);
                    }
               ?>

          <?php 
              if (!isset($_GET['catId']) || $_GET['catId'] =="") {
                header("Location:categorylist.php");
              }
              else
              {
                  $catId = $_GET['catId'];
              }
           ?>
               <div class="myform">
                <div class="panel panel-default">

             
                   <div class="panel-heading">
                      <h3 class="panel-title">Category Add</h3>
                    </div>
                    <div class="panel-body">
                           <span class="emsg">
                         <?php 
                            if (isset($categoryupdate)) {
                              echo $categoryupdate;
                            }
                          ?>
                       </span>
                       <?php 

                        $cateditbyId = $cat->edit($catId);

                        if($cateditbyId)
                        {
                          while ($row = $cateditbyId->fetch_assoc()) {?>
                              
                      
                      <form action="" method="post">
                        <div class="form-group">                         
                                <label for="inputEmail">Category Name</label>
                                <input type="text" name="category" class="form-control" id="inputEmail" value="<?php echo $row['category_name'];?>">                            
                         </div>

                            
                     
                            <div class="form-group">   
                            <?php 
                                $status = $row['status'];

                             ?>                      
                                <label for="inputEmail">Status</label>   
                               <input type="radio" name="status" <?php echo ($status == 'active')?'checked':'' ?>  value="active" id="a">
                               <label for="a">Active</label>
                               <input type="radio" name="status" <?php echo ($status == 'inactive')?'checked':'' ?>  value="inactive" id="ina">
                               <label for="ina">Inactive</label>
                           </div>
                       
                           <input type="hidden" name="id" value="<?php echo $row['catId'];?>">

                          <input type="submit" class="btn btn-primary" value="Update">
                          <a href="categorylist.php" class="btn btn-warning">Back</a>
                    </form>

                    <?php
                        }
                        }
                      ?>
                    </div> 
                   
                </div>
               </div>
           </div>
         </div>
      </div>


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