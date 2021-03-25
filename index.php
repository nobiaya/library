
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <title>Document</title>
    <style>
     
     .banner {
    text-align: center;
    background: url(./assets/img/librarybanner2.jpg) no-repeat;
    background-attachment: scroll;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.banner .overlay {
    background: rgba(0, 0, 0, 0.7);
    width: 100%;
    height: 100%;
}
  
.intro-text {
    position: relative;
    padding: 20% 0 15% 0;
}

.banner .intro-text h1 {    
    font-size: 50px;
    font-weight: 700;
    line-height: 50px;
    letter-spacing: 5px;
    margin-bottom: 55px;
    -webkit-animation: bounceIn;
    -moz-animation: rubberBand;
    -o-animation: bounceIn;
    animation: bounceIn;
    -webkit-animation-duration: 2s;
    -moz-animation-duration: 2s;
    -o-animation-duration: 2s;
    animation-duration: 2s;
    font-family: 'Oswald', sans-serif;
}

.banner .intro-text h1 span {
    color: #ff432e;
}

.banner .intro-text p {
    color: #fff;
    font-size: 30px;
    font-weight: 300;
    line-height: 35px;
    letter-spacing: 3px;
    margin-bottom: 55px;
    -webkit-animation: bounceInCenter;
    -moz-animation: fadeCenter;
    -o-animation: fadeCenter;
    animation: bounceLeft;
    -webkit-animation-duration: 2s;
    -moz-animation-duration: 2s;
    -o-animation-duration: 2s;
    animation-duration: 2s;
    text-align:center;
}

.banner .intro-text .btn-primary {
    padding: 29px 25px;
    font-size: 16px;
    border-color: #fff;
    color: #fff;
    border-radius: 0;
    width: 130px;}

.banner .btn-primary:hover {
	background: #fff;
	border-color: #fff;
    color: #111;
}
   #header{
       background:red; 
       border-bottom:1px solid blue;
       transition:all 0.5s;
       z-index:997;
       padding:15px 0;
       top:40px;
   }



    </style>

</head>

<body>
<header id="header" class="fixed top">
   <div class="container d-flex align-items-center">
     <nav>
     <li><button><a href="signup.php">User Signup</a></button></li>
     <li><button><a href="home.php">User login</a></button></li>
     </nav>
   
   </div>

</header>

    <div class="banner">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Welcome To The <span>Imo State University</span></h1>
         <a href="home.php"><p>Explore and Borrow Books <br> Through Online</p></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->

           <!-- CONTENT-WRAPPER SECTION END-->
 <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

        
</body>
</html>