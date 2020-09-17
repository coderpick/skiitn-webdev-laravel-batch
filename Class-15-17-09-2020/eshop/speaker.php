<?php 
    include 'layout/header.php';
 ?>
<section id="product-details">
  <div class="container">
      <div class="row">
        <?php 
              $getCategory = $pro->getCategoryPro(12);
              if ($getCategory) {

                foreach ($getCategory as $row) {?>
                  
                       <div class="col-md-3">
                         <div class="single-product">
                              <div class="card">
                              <img class="card-img-top" src="admin/<?php echo $row['image'];?>" alt="Card image cap">
                              <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $row['product_name']; ?></h5>                   
                               <a href="product-datails.php?proid=<?php echo $row['id'];?>" class="btn btn-warning">Details</a>
                              
                              </div>
                            </div>
                          </div>
                      </div>
         <?php       }
              }
         ?>
   
      </div>
  </div>
</section>

<?php

  include "layout/footer.php";
?>