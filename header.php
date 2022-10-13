<?php
   session_start();
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Online Shopping</title>
      <!-- Google font -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
      <!-- Bootstrap -->
      <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
      <!-- Slick -->
      <link type="text/css" rel="stylesheet" href="css/slick.css"/>
      <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
      <!-- nouislider -->
      <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
      <!-- Font Awesome Icon -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- Custom stlylesheet -->
      <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
      <style>
         #navigation {
	         background-color: rgb(38, 36, 63);
         }
         #header {
			background-color: rgb(28, 27, 45)
         }
         #top-header {
			background-color: rgb(28, 27, 45)
         }
         .footer-links li a {
            color: white
         }
         .mainn-raised {
			margin: -7px 0px 0px;
			border-radius: 6px;
			box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
         }
         .glyphicon {
			display: inline-block;
			font: normal normal normal 14px/1 FontAwesome;
			font-size: inherit;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
         }
         .glyphicon-chevron-left:before{
            content:"\f053"
         }
         .glyphicon-chevron-right:before{
            content:"\f054"
         }
      </style>
   </head>
   <body>
      <!-- HEADER -->
      <header>
         <!-- TOP HEADER -->
         <div id="top-header">
            <div class="container">
               <ul class="header-links pull-right">
                  <!-- <li><a href="#"><i class="fa fa-inr"></i> INR</a></li> -->
                  <li><?php
                     include "db.php";
                     if(isset($_SESSION["uid"])){
                        $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                        $query = mysqli_query($con,$sql);
                        $row= mysqli_fetch_array($query);
                        
                        echo '
                        <div class="dropdown">
                           <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
                           <div class="dropdownn-content">
                           <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>Hồ sơ</a>
                           <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng xuất</a>
                           
                           </div>
                        </div>';
                     
                     }else{ 
                        echo '
                        <div class="dropdownn">
                           <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i>Tài khoản</a>
                        <div class="dropdownn-content">
                           <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Đăng 444</a>
                           <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng ký</a>
                           
                        </div>
                        </div>';
                     }
                     ?>
                  </li>
               </ul>
            </div>
         </div>
         <!-- /TOP HEADER -->
         <div id="header">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row">
                  <!-- LOGO -->
                  <div class="col-md-3" style="padding: 15px;">
                     <div class="header-logo">
                        <a href="index.php" class="logo">
                        <font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">SHOP TTK
                        </font>
                        </a>
                     </div>
                  </div>
                  <!-- /LOGO -->
                  <!-- SEARCH BAR -->
                  <div class="col-md-6">
                     <div class="header-search">
                        <form>
                           <input class="input" id="search" type="text" placeholder="Tìm kiếm ở đây">
                           <button type="submit" id="search_btn" class="search-btn">Tìm kiếm</button>
                        </form>
                     </div>
                  </div>
                  <!-- /SEARCH BAR -->
                  <!-- ACCOUNT -->
                  <div class="col-md-3 clearfix">
                     <div class="header-ctn">
                        <!-- Cart -->
                        <div class="dropdown">
                           <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                              <i class="fa fa-shopping-cart"></i>
                              <span>Giỏ Hàng</span>
                              <div class="badge qty">0</div>
                           </a>
                           <div class="cart-dropdown"  >
                              <div class="cart-list" id="cart_product">
                              </div>
                              <div class="cart-btns">
                                 <a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>Mở rộng</a>
                              </div>
                           </div>
                        </div>
                        <!-- /Cart -->
                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                           <a href="#">
                           <i class="fa fa-bars"></i>
                           <span>Menu</span>
                           </a>
                        </div>
                        <!-- /Menu Toogle -->
                     </div>
                  </div>
                  <!-- /ACCOUNT -->
               </div>
               <!-- row -->
            </div>
            <!-- container -->
         </div>
         <!-- /MAIN HEADER -->
      </header>
      <!-- /HEADER -->
      <nav id='navigation'>
         <!-- container -->
         <div class="container" id="get_category_home">
            
         </div>
         <!-- responsive-nav -->
         <!-- /container -->
      </nav>
      <!-- NAVIGATION -->
      <div class="modal fade" id="Modal_login" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <?php
                     include "login_form.php";
               ?>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="Modal_register" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <?php
                     include "register_form.php";
                     ?>
               </div>
            </div>
         </div>
      </div>