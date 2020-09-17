<?php 
    include 'layout/header.php';
 ?>
   <div style="background-color: #ddd">
        <div class="container">
            <div class="row">
                 <div class="col-md-6">
                   <div class="login-form ">
                    <h3>Login here</h3>
                       <?php 
                            if (isset($_POST['login'])) {                        

                              $cuslogin = $log->Login($_POST);
                            }
                       ?>
                 <?php 
                    if (isset($cuslogin)) {
                      echo $cuslogin;
                    }
                  ?>
                       <form action="" method="post">
                          <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" id="inputEmail">
                          </div>
                          <div class="form-group">
                            <label for="inputp">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" id="inputp">
                          </div>
                          <button type="submit" name="login" class="btn btn-success">Login</button>
                       </form>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="reg-form">
                        <h3>Registration here</h3>                           
                            <?php 
                                  if (isset($_POST['Reg'])) {

                                    $registration = $log->Registration($_POST);
                                  }
                             ?>
                         <?php 
                              if (isset($registration)){
                                echo  $registration;
                              }
                          ?>    
                      <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
                          </div>
                          <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" id="inputEmail">
                          </div>
                          <div class="form-group">
                            <label for="inputp">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" id="inputp">
                          </div>
                          <div class="form-group">
                            <label for="inputm">Mobile no.</label>
                            <input type="number" name="mobile" class="form-control" placeholder="Enter mobile no."" id="inputm">
                          </div>
                          <div class="form-group">
                            <label for="inputp">Address</label>
                            <textarea rows="6" name="address" class="form-control"></textarea>
                          </div>
                          <button type="submit" name="Reg" class="btn btn-success">Sign Up</button>
                       </form>
                   </div>
                 </div>
            </div>            
        </div>

     
   </div>
 <?php 
    include 'layout/footer.php';
 ?>