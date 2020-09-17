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

    $cat   = new Category();
    $brand = new Brand();
    $pro   = new Product();
 ?>
<?php 
     if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])) 
    {        

         $insertProduct = $pro->insert($_POST,$_FILES);
    }
?>
<?php 
    if (isset($insertProduct)) {
      echo $insertProduct;
    }
 ?>
           <form action="" method="post" enctype="multipart/form-data">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Product Add</h3>
                </div>
                <div class="panel-body">
                   <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="Cat">Select Category</label>
                        <select name="catId" class="form-control" id="Cat">
                          <?php 
                           $categorylist = $cat->showCategory();

                           if ($categorylist) {
                            
                            foreach ( $categorylist as $row) {?>

                              <option value="<?php echo $row['catId']; ?>"><?php echo $row['category_name']; ?></option>
                            <?php  }} ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Cat">Select Brand</label>
                        <select name="brandId" class="form-control" id="Cat">
                      <?php 
                           $brandlist = $brand->show();

                           if ($brandlist) {
                            
                            foreach ( $brandlist as $row) {?>

                              <option value="<?php echo $row['id']; ?>"><?php echo $row['brandname']; ?></option>
                            <?php  }} ?>
                       
                        </select>
                      </div>

                       <div class="form-group">
                        <label for="inputPro">Product Details</label>
                        <textarea name="details" class="form-control" rows="10"></textarea>
                      </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="inputPro">Product Name</label>
                        <input type="text" name="productname" class="form-control" id="inputPro">
                      </div>
                      <div class="form-group">
                        <label for="inputPro">Product Price</label>
                        <input type="number" name="price" class="form-control" id="inputPro">
                      </div>
                      <div class="form-group">
                        <label for="Cat">Product Type</label>
                        <select name="type" class="form-control" id="Cat">
                          <option  value="feature">Feature</option>
                          <option  value="nonfeature">Non-Feature</option>
                          <option  value="new">New</option>
                          <option  value="offer">Offer</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <img src="../admin/uploads/default.png" id="preview" height="176" width="286" alt="">

                        <input type="file" name="image" class="form-control"  onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
                      </div>

                         <div class="form-group">                         
                                <label for="inputEmail">Status</label>   
                               <input type="radio" name="status" value="active" id="a">
                               <label for="a">Active</label>
                               <input type="radio" name="status" value="inacitve" id="ina">
                               <label for="ina">Inactive</label>
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