<?php
session_start();
include('config.php');
$sidd = $_SESSION['stdid'];
$sql="SELECT * from  tblstudents where StudentId=:sidd";
$query = $dbh -> prepare($sql);
$query-> bindParam(':sidd', $sidd, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
// die(print $resultS);
?>
<div class="navbar navbar-inverse set-radius-zero bg-primary" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                    foreach ($results as $result) {
                ?>
                <a class="navbar-brand" >

                    <img src="data:image;base64,<?php print $result->photo; ?>" style="height:500%; width:60%;"/>
                    <h1><?php print $result->FullName; ?> - online</h1>
                </a>
                <?php }?>
            </div>
<?php if($_SESSION['login'])
{
?> 
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>    
<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                           
                          
   <li>
   <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
   <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
   <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My Profile</a></li>
   <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
     </ul>
    </li>
      
    <li>
   <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Faculty<i class="fa fa-angle-down"></i></a>
   <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
   <li role="presentation"><a role="menuitem" tabindex="-1" href="computer.php">Computer Science</a></li>
   <li role="presentation"><a role="menuitem" tabindex="-1" href="socialogy.php">Socialogy</a></li>
   <li role="presentation"><a role="menuitem" tabindex="-1" href="agriculture.php">Argicultural Science</a></li>
     </ul>
    </li>

                            <li><a href="issued-books.php">Issued Books</a></li>
                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                                                
                            <li><a href="home.php">Home</a></li>           
                            <!-- <li><a href="signup.php">User Signup</a></li> -->
                             <li><a href="index.php">User Login</a></li>
                             <li><a href="adminlogin.php">Admin Login</a></li>

                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php } ?>