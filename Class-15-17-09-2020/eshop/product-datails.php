<?php 
    include 'layout/header.php';
 ?>

<?php 
      if (!isset($_GET['proid'])) {
        
      }else
      {
        $id = $_GET['proid'];
       // echo $id;
      }
 ?>

 <?php 
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $quantity = $_POST['quantity'];         

          $addCart  = $ct->addToCart($quantity,$id);
        }
  ?>
<section id="product-details">
  <div class="container">
    <div class="row">
       <div class="col-md-9">
        <?php 

            $getprobyId = $pro->getSingleProductbyId($id);
            
           if ($getprobyId) {
             while ($row = $getprobyId->fetch_assoc()) {?>


          <div class="single-product-info">
           <div class="media">
            <img class="mr-3 single-product-img img-thumbnail" src="admin/<?php echo $row['image'];?>" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0"><?php echo $row['product_name']; ?></h5>
              <h5>Price:    <span class="taka">&#x9f3;<?php echo $row['price']; ?></span></h5>
              <h5>Category: <?php echo $row['category_name']; ?> </h5>
              <h5>Barnd:    <?php echo $row['brandname']; ?> </h5>            
   
              <div class="cart-footer">               
               <form action="" method="post">
                    <input type="number" class="form-control mb-2" name="quantity" placeholder="Quantity" value="1" required="">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
               </form>  

               <?php 
                  if (isset($addCart)) {
                    echo '<p class="text-danger">'.$addCart.'</p>';
                  }
                ?>            
              </div>             
            </div>
          </div>
          <h5>Product Deatils: </h5>
          <hr>
          <div class="product-details">
            <p><?php echo html_entity_decode($row['details']); ?></p>
          </div>
          </div>

    <?php 
           }
           }
           
     
     ?>
       </div>
       <div class="col-md-3">
          <div class="product-page-sidebar">
              <h3>Category</h3>  
               <ul class="categroy-menu">
                <?php 
                   $getcategory= $cat->showCategory();

                   if ($getcategory) {
                     while ($row = $getcategory->fetch_assoc()) {?>
                           <li><a href="product.php?id=<?php echo $row['catId'];?>"><?php echo $row['category_name'] ?></a></li>
                   <?php    }
                   }
                 ?>
               
              
               </ul>
          </div>
       </div>
    </div>
  </div>
</section>

<?php

  include "layout/footer.php";
?>