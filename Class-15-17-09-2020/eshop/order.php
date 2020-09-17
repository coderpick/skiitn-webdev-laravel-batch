<?php 
    include 'layout/header.php';

    if(isset($_GET['msg']) && $_GET['msg'] == 'success'){
            $success = $_GET['msg'];
    }

    if (Session::get('cmrId')){
        $cmrId = Session::get('cmrId');
    }

  $insertOrder = $ct->addCustomerOrder($cmrId);

  $delcustormCart = $ct->delCustomerCart();

 ?>
   <div style="background-color: #ddd">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="paymentopton text-center" style="background-color: #fff">

                     <?php 
                        if (isset($success)) {?>
                          <h3 class="text-success text-center text-capitalize">Thank you. We will contact very soon.</h3>
                        <?php    }
                      ?>
                      <table class="table table-bordered">
                          <tr>
                            <th>SN.</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Order Date</th>
                            <th>Status</th>
                          </tr>
                           <?php 
                            $getorder = $ct->getCustomerOroder($cmrId);
                            if($getorder){
                              $i = 1;
                              while ($row = $getorder->fetch_assoc()) {?>                        
                               <tr>
                                 <td><?php echo $i++; ?></td>
                                 <td><?php echo $row['productName']; ?></td>
                                 <td><?php echo $row['quantity']; ?></td>
                                 <td><?php echo $row['price']; ?></td>
                                 <td><?php echo $fm->formatDate($row['orderdate']); ?></td>
                                 <td>
                                    <?php 
                                        if( $row['status'] == 0 ){?>
                                         <button class="btn btn-warning">Pending</button>
                                      <?php  }else{?>
                                          <button class="btn btn-success">Success</button>
                                     <?php    }?>
                                    
                                  </td>
                               </tr>


                             <?php   }
                           
                              
                            }else{?>
                                  <p>Your order not available!</p>
                          <?php } ?>
                      </table>
                  
                   </div>
                </div>
            </div>            
        </div>

     
   </div>
 <?php 
    include 'layout/footer.php';
 ?>