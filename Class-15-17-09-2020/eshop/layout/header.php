<?php 
  $filepath = realpath(dirname(__FILE__));
  include_once $filepath."/../lib/Session.php";
  Session::init();
 ?>
<?php 
  $filepath = realpath(dirname(__FILE__));
  include_once $filepath."/../lib/Format.php";
  $fm = new Format();

    spl_autoload_register(function($class){
        $filepath = realpath(dirname(__FILE__));
        include_once $filepath."/../Classes/".$class.".php";
    });
 
    $pro  = new Product();
    $cat  = new Category();
    $ct   = new Cart();
    $log  = new CustomerLogin();
    $slider  = new Slider();
    $con  = new Contact();

 ?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SmartBazar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- icofontcss -->
        <link rel="stylesheet" href="css/icofont.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<div class="main-menu">
         
               <nav class="navbar navbar-expand-lg  navbar-light bg-light">
                  <div class="container">
                      <a class="navbar-brand" href="index.php">
                          <img src="img/logo.png" width="180" alt="">
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                         
                         <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                          </li>
                       
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="mobile.php">Mobile</a>
                              <a class="dropdown-item" href="laptop.php">Laptop</a>
                              <a class="dropdown-item" href="router.php">Router</a>
                              <a class="dropdown-item" href="watch.php">Watch</a>
                              <a class="dropdown-item" href="pendrive.php">Pendrive</a>
                              <a class="dropdown-item" href="mouse.php">Mouse</a>
                              <a class="dropdown-item" href="keyboard.php">Keyboard</a>
                              <a class="dropdown-item" href="headphone.php">Headphone</a>
                              <a class="dropdown-item" href="speaker.php">Speaker</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                          </li>
                          <?php 
                                $checkCart = $ct->checkCartTable();
                                if($checkCart){?>
                               <li class="nav-item">
                                  <a class="nav-link" href="cart.php">Cart</a>
                                </li> 

                            <?php  }
                           ?>
                           <?php 
                              $login = Session::get('cmrlogin');
                                if($login == true){?>
                                <li class="nav-item">
                                        <a class="nav-link" href="payment.php">Payment</a>
                                  </li>

                                  <li class="nav-item">
                                        <a class="nav-link" href="order.php">Order</a>
                                  </li>
                            
                          <?php  }  

                            ?>                         
                         
                        </ul>
                       
                            <form action="search.php" method="get" class="form-inline my-2 my-lg-0">
                              <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
                            </form>
                        
                          <ul class="list-unstyled ml-2 mt-3">

                           <a class="btn btn-info" href=""><i class="icofont icofont-cart-alt"></i>:
                               <?php
                               $getData = $ct->checkCartTable();
                               if ($getData) {
                                   $sum = Session::get('sum');
                                   $qty = Session::get('qty');
                                   echo "$ ".$sum . " | Qty: ".$qty;
                               }
                               else{
                                   echo 'Empty';
                               }

                               ?>
                           </a>
                            <?php 
                                if (isset($_GET['action']) && $_GET['action']=='logout') {
                                  Session::destroy();
                                }
                             ?>
                              <?php 
                                $login = Session::get('cmrlogin');
                                if($login == false)
                              {?>
                                 <a class="btn btn-success" href="login.php">Login</a>
                                 
                             <?php }else {?>
                                <a class="btn btn-warning" href="?action=logout">Logout</a>
                             <?php  } ?>
                             
                            
                          </ul>

                      </div>
                        </div> 
                </nav>              
        </div>