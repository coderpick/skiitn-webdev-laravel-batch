<?php 
    include 'layout/header.php';
    include 'layout/slider.php';
 ?>


<div class="product-section one">
    <div class="container">
        <div class="section-title">
            <h2>Feature Product</h2>
            <hr>
        </div>
        <div class="row">
          <div class="owl-carousel products">
            <?php 
                 $getFeatureProduct = $pro->showFeatureProduct();

                 if ($getFeatureProduct) {
                   
                   foreach ($getFeatureProduct as $singleproduct) {?>

                <div> 
                    <div class="single-product">
                      <div class="card">
                        <img class="card-img-top" src="admin/<?php echo $singleproduct['image'];?>" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title"><?php echo $singleproduct['product_name']; ?></h5>                   
                         <a href="product-datails.php?proid=<?php echo $singleproduct['id'];?>" class="btn btn-warning">Details</a>
                         
                        </div>
                      </div>
                    </div>
                 </div>
                     
              <?php      }
                 }
             ?>

                     
              </div>
     

        </div>
    </div>
</div>		<!--  // end product one section -->


<div class="product-section two">
    <div class="container">
        <div class="section-title">
            <h2>New Products</h2>
            <hr>
        </div>
        <div class="row">
           <?php 
                 $getNewProduct = $pro->showNewProduct();

                 if ($getNewProduct) {
                   
                   foreach ($getNewProduct as $singleproduct) {?>

            <div class="col-md-3">
                 <div class="single-product">
                      <div class="card">
                        <img class="card-img-top" src="admin/<?php echo $singleproduct['image'];?>" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title"><?php echo $singleproduct['product_name']; ?></h5>                   
                         <a href="product-datails.php?proid=<?php echo $singleproduct['id'];?>" class="btn btn-warning">Details</a>
                         
                        </div>
                      </div>
                    </div>
            </div>
            <?php }} ?>
         
        </div>
    </div>
</div>      <!--  // end product two section -->

<!-- newsletter -->
<section id="newsletter">
  <div class="news-cover"></div>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="newsletter-title">
              <h2>Newsletter</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, officiis.</p>
            </div>
        </div>
        <div class="col-md-6">
             <div class="newsletter-form">
                 <form action="" class="form-inline">
                      <div class="form-group">
                         <input type="email" class="form-control" placeholder="Enter your email">
                      </div>
                      <button class="btn btn-primary">Sign Up</button>
                 </form>
             </div>
        </div>
    </div>
  </div>
</section>

<section id="brand">
  <div class="container">
       <div class="section-title text-center">
          <h2>Our Brand</h2>
       </div>

       <div class="row">
         <div class="col-md-12">
             <div class="owl-carousel">
                <div> <img src="img/brands/Huawei-Logo.jpg" alt=""> </div>
                <div> <img src="img/brands/walton.jpg" alt=""> </div>
                <div> <img src="img/brands/Samsung-Logo.png" alt=""> </div>
                <div> <img src="img/brands/logo_footer-min.png" alt=""> </div>
                <div> <img src="img/brands/Huawei-Logo.jpg" alt=""> </div>
                <div> <img src="img/brands/Huawei-Logo.jpg" alt=""> </div>
                <div> <img src="img/brands/walton.jpg" alt=""> </div>
                <div> <img src="img/brands/Samsung-Logo.png" alt=""> </div>              
              </div>
         </div>
       </div>
  </div>
</section>

<?php 
    include 'layout/footer.php';
 ?>