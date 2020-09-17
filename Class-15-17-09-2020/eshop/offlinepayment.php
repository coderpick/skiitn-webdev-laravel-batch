<?php 
    include 'layout/header.php';

 ?>
 <?php 
    $login =   Session::get('login');
    if ($login == true) {
     echo '<script>window.location="login.php"</script>';  
    }
 ?>
   <div style="background-color: #ddd">
        <div class="container">
             <div class="row">
                <div class="col-md-12">

                   
                       <table class="table">
                       <tr class="text-info">
                         <th>Ser.</th>
                         <th>Product</th>                      
                         <th width="30%">Quantity</th>
                         <th>Price</th>
                         <th>Total</th>                     
                       </tr>
                      <?php 

                          $getCartItem = $ct->getCartProduct();

                          if ($getCartItem) {
                               $sum = 0;
                               $qty = 0;
                               $i = 1;
                              while ($row = $getCartItem->fetch_assoc()) {?>
                           <tr>
                              <td><?php echo $i++ ?></td>
                              <td><?php echo $row['product_name'] ?></td>
                              <td> <?php echo $row['quantity']; ?> </td>
                              <td> <?php echo $row['price']; ?> </td>
                              <td>
                                <?php
                                    $total = $row['price']*$row['quantity'];
                                    echo $total;
                                  ?>
                                
                              </td>
                             
                              
                            
                          </tr>
                          <?php 
                             $sum = $sum+$total;

                              }
                          }
                       ?>
              <?php 
                $getData = $ct->checkCartTable();
                 if ($getData) {?>  

                       <tr>
                         <td colspan="3" rowspan="3"></td>                       
                         <td>Sub total</td>
                         <td>:</td>
                         <td>
                          <?php                           
                            echo $sum;
                          ?>
                          </td>
                       </tr>
                       <tr>                        
                         <td>Vat (15%)</td>
                         <td>:</td>
                         <td><?php $vat = $sum*0.15; echo $vat; ?></td>
                       </tr>
                        <tr>                         
                         <td>Payable Amount</td>
                         <td>:</td>
                         <td><?php echo  $sum+$vat; ?></td>
                       </tr>
                      <?php }else{
                        echo 'Your cart is empty. Please buy some products';
                      } ?>
                    </table>
                
                  <div class="orderbtn text-center mb-5">                  
                    <a href="order.php?msg=success" class="btn btn-primary">Order Now</a>
                  </div>
                </div>
            </div>            
        </div>

     
   </div>
 <?php 
    include 'layout/footer.php';
 ?>