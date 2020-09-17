<?php 
    include 'layout/header.php';
 ?>
   <div class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 <?php 
                       if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                          $cartid   = $_POST['cartid'];    
                          $quantity = $_POST['quantity'];    
                           

                          $cartUpdate  = $ct->UpdateCart($cartid,$quantity);
                        }
                  ?>
                  <?php 
                      if (isset($cartUpdate)) {
                        echo '<p class="text-danger">'.$cartUpdate.'</p>' ;
                      }
                   ?>
                
                        <?php 
                              if (isset($_GET['del'])) {                                
                            
                                $id = $_GET['del'];
                                
                               $deletecart = $ct->delPorductByCart($id);
                              }
                         ?>
                   <?php 
                     if (!isset($_GET['id'])) {
                        echo '<meta http-equiv="refresh" content="0;URL=?id=live" />';
                    }
                    ?>
                       <table class="table">
                       <tr class="text-info">
                         <th>Product</th>
                         <th>Image</th>
                         <th width="30%">Quantity</th>
                         <th>Price</th>
                         <th>Total</th>
                         <th>Action</th>
                       </tr>
                      <?php 

                          $getCartItem = $ct->getCartProduct();

                          if ($getCartItem) {
                               $sum = 0;
                               $qty = 0;
                              while ($row = $getCartItem->fetch_assoc()) {?>
                           <tr>
                              <td><?php echo $row['product_name'] ?></td>
                              <td>
                                <img src="admin/<?php echo $row['image']?>" style="width: 50px" alt="">                          
                              </td>
                              <td>
                               <form action="" method="post" class="form-inline">                                
                                  <div class="form-group mx-sm-1 mb-2">
                                    <input type="hidden"  name="cartid" value="<?php echo $row['cart_id'];?>">
                                    <input type="number"  name="quantity" class="form-control" value="<?php echo $row['quantity'];?>">
                                  </div>
                                  <button type="submit" class="btn btn-primary mb-2">update</button>
                                </form>
                            
                              </td>
                              <td>
                                  <?php echo $row['price']; ?>
                              </td>
                              <td>
                                  <?php
                                   $total= $row['price']*$row['quantity'];
                                    echo $total;
                                    ?>
                              </td>
                              <td width="25%">                             
                                 <a href="?del=<?php echo $row['cart_id'];?>" class="btn btn-danger">Remove</a>
                              </td>
                          </tr>
                          <?php 
                             $sum = $sum+$total;
                             $qty = $qty + $row['quantity'];
                             
                             Session::set('sum',$sum );
                             Session::set('qty',$qty );

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
                

                </div>
            </div>
            <div class="text-center">
                 <a href="index.php" class="btn btn-info">Continue Shopping</a>
                 <a href="login.php" class="btn btn-warning">Checkout</a>
            </div>
        </div>

     
   </div>
 <?php 
    include 'layout/footer.php';
 ?>