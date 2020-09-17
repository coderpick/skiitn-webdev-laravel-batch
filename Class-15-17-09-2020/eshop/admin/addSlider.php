<?php 
    include 'layouts/head.php'
 ?>
<div class="wrapper">
<?php 
    include 'layouts/header.php'

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
 <?php 
 

function __autoload($class_name){

   $filepath = realpath(dirname(__FILE__));  

  include_once($filepath.'/../Classes/'.$class_name.'.php');
}

  
    $slide   = new Slider();
 ?>

<?php 
     if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])) 
    {        

       
         $insertSlide = $slide->insert($_POST,$_FILES);
    }
?>
<?php 
    if (isset($insertSlide)) {
      echo $insertSlide;
    }
 ?>
           <form action="" method="post" enctype="multipart/form-data">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Slider Add</h3>
                </div>
                <div class="panel-body">
                   <div class="col-md-6 col-sm-6">
                <div class="form-group">
                        <label for="inputPro">Sldier Details</label>
                        <textarea name="details" class="form-control" rows="10"></textarea>
                      </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="inputPro">Slider Title</label>
                        <input type="text" name="title" class="form-control" id="inputPro">
                      </div>
                   
                      <div class="form-group">
                        <img src="../admin/uploads/default.png" id="preview" height="176" width="286" alt="">

                        <input type="file" name="image" class="form-control"  onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
                      </div>

                   </div>                  
                
                </div>              
             </div>
              <div class="text-center">
                 <input type="submit" name="submit" class="btn btn-primary" value="Save">
              </div>
           </form>
     


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