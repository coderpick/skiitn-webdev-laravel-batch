<?php 
    include 'layout/header.php';
 ?>
  <?php 
    $login =   Session::get('cmrlogin');
    if ($login == false) {
       echo '<script>window.location="index.php"</script>';  
    }
 ?>

   <div style="background-color: #ddd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                   <div class="paymentopton text-center">
                       <h3>Choose your Payment Option</h3>
                       <hr>
                       <a class="btn btn-primary" href="offlinepayment.php">Cash on Delivery(COD)</a>
                       <a class="btn btn-warning" href="">Payment with CARD</a>
                   </div>
                </div>
            </div>            
        </div>

     
   </div>
 <?php 
    include 'layout/footer.php';
 ?>