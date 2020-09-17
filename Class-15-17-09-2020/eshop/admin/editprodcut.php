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
        if (!isset($_GET['id']) || $_GET['id'] =="") {
          header("Location:productlist.php");
        }
        else
        {
            $id = base64_decode($_GET['id']);           
        }
     ?>
<?php 
     if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])) 
    {        

         $productUpdate = $pro->update($_POST,$_FILES,$id);
    }
?>
<?php 
    if (isset($productUpdate)) {
      echo $productUpdate;
    }
 ?>

          <?php 
                $getProById = $pro->edit($id);

                if ($getProById) {
                  foreach ($getProById as $value) {?>
                   
           
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

                              <option 
                               <?php if ($value['catid'] == $row['catId']) {?>
                                             selected="selected"
                                      <?php   }?> 

                               value="<?php echo $row['catId']; ?>"><?php echo $row['category_name']; ?></option>
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

                              <option
                                <?php if ($value['brandId'] == $row['id']) {?>
                                             selected="selected"
                                      <?php   }?> 
                               value="<?php echo $row['id']; ?>"><?php echo $row['brandname']; ?></option>
                            <?php  }} ?>
                       
                        </select>
                      </div>

                       <div class="form-group">
                        <label for="inputPro">Product Details</label>
                        <textarea name="details" class="form-control" rows="10"><?php echo $value['details']; ?> </textarea>
                      </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="inputPro">Product Name</label>
                        <input type="text" name="productname" class="form-control" value="<?php echo $value['product_name'];?>" id="inputPro">
                      </div>
                      <div class="form-group">
                        <label for="inputPro">Product Price</label>
                        <input type="number" name="price" value="<?php echo $value['price'];?>" class="form-control" id="inputPro">
                      </div>
                      <div class="form-group">
                        <label for="Cat">Product Type</label>
                        <select name="type" class="form-control" id="Cat">
                          <option       
                          <?php if ($value['type'] == 'feature') {?> selected="selected" <?php   }?>  value="feature">Feature</option>
                          <option 
                            <?php if ($value['type'] == 'nonfeature') {?> selected="selected" <?php   }?> 
                          value="nonfeature">Non-Feature</option>
                          <option 
                            <?php if ($value['type'] == 'new') {?> selected="selected" <?php   }?> 
                          value="new">New</option>
                          <option 
                            <?php if ($value['type'] == 'offer') {?> selected="selected" <?php   }?> 
                          value="offer">Offer</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <img src="<?php echo $value['image'];?>" id="preview" height="200" width="286" alt="">

                        <input type="file" name="image" class="form-control"  onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
                      </div>

                         <div class="form-group">   
                        <?php 
                            $status = $value['status'];
                         ?>                      
                            <label for="">Status</label>   
                           <input type="radio" name="status" <?php echo ( $status == 'active')?'checked':'' ?>    value="active" id="a">
                           <label for="a">Active</label>
                           <input type="radio" name="status" <?php echo ( $status == 'inactive')?'checked':'' ?>  value="inactive" id="ina">
                           <label for="ina">Inactive</label>
                       </div>
                       
                   </div>                  
                
                </div>              
             </div>
              <div class="text-center">
                 <input type="submit" name="submit" class="btn btn-primary" value="Update">
              </div>
           </form>
         <?php 
                  }
                }
           ?>

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