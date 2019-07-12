 <?php

    include 'php/joins/db.php';

    include "php/joins/config.php";



    session_start();//on logout session_destroy();

    if(!empty($_POST["email"])) { //true if form was submitted

        $query  = "SELECT * FROM tbl_users_212 WHERE email='" 

        . $_POST["email"] 

        . "' and password = '"

        . $_POST["password"]

        ."'";

        //echo $query;//can't start echo if header comes after it

   

        $result = mysqli_query($connection , $query);

        $row    = mysqli_fetch_array($result);

        

        if(is_array($row)) {

            $_SESSION["id"] = $row['id'];
            $_SESSION["name"]= $row['name'];
            header('Location: ' . URL . 'index.php');

        } else {

            $message = "Invalid Username or Password!";

        }

    }

?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="includes/style.css">
</head>
<body id="wrapper">
      <!-- <header>
        <div class="navbar navbar-custom navbar-static-top" id="colorHed">
          <div class="container">
            <div class="navbar-header" id="go-right">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>


              <ul class="nav navbar-nav navbar-left leftSise2" style="float: right;">
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-bell" id="icon-Nav"></span><span class="label label-primary">42</span>
                  </a>
                </li>
              </ul>
                                                              

              <ul class="nav navbar-nav navbar-left leftSise">
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-bell" id="icon-Nav"></span>התראות <span class="label label-primary">42</span>
                    </a>
                    <ul class="dropdown-menu"  id="wi2">
                        <li><a href="#"><span class="label label-warning">7:00 AM</span>גולי נמצאת באזור ספה</a></li>
                        <li><a href="#"><span class="label label-warning">8:00 AM</span>דיבל 300 כ-4 דק</a></li>
                        <li><a href="#"><span class="label label-warning">9:00 AM</span>גולי בחדר שלך רון </a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="text-center">צפיה כל ההתראות</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-envelope"  id="icon-Nav"></span>הודעות <span class="label label-info">32</span>
                  </a>
                  <ul class="dropdown-menu" id="wi2">
                      <li><a href="#"><span class="label label-warning">4:00 AM</span>Favourites Snippet</a></li>
                      <li><a href="#"><span class="label label-warning">4:30 AM</span>Email marketing</a></li>
                      <li><a href="#"><span class="label label-warning">5:00 AM</span>Subscriber focused email
                        design</a></li>
                      <li class="divider"></li>
                      <li><a href="#" class="text-center">View All</a></li>
                  </ul>
                </li>
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-user"  id="icon-Nav"></span>שרון <b class="caret"></b></a>
                  <ul class="dropdown-menu" id="wi2">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span>פרופיל</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span>הגדרות</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                  </li>
              </ul>  
                        


              <a id="Logo" href="index.html">
                  <span class="fa fa-paw paw1"></span>
                  <h1 class="Hdog">Dog </h1>
                  <span class="logoIMG"></span> 
                  <h1 class="Hfetch"> Fetch</h1> 
                  <span class="fa fa-paw paw2"></span>                            
              </a>  
                            
                          
              </div>
                <div class="collapse navbar-collapse" id="fix">
                  <ul class="nav navbar-nav" id="onlyapp" id="moveRight">
                      <li><a href="#contact"><img src="images/avatar.svg" class="imagHumborger">הגדרות פרפיל </a></li>
                      <li class="active"><a href="listDogsPage.html"><img src="images/add-dog.svg" class="imagHumborger">הכלבים שלי</a></li>   
                      <li class="active"><a href="#"><img src="images/animal.svg" class="imagHumborger">מעקב טיפול</a></li>
                      <li class="active"><a href="listDOT.html"><img src="images/dot.svg" class="imagHumborger">אזורים אזורים</a></li>
                      <li class="active"><a href="#"><img src="images/colar.svg" class="imagHumborger">מכשיר אלקטרוני</a></li>
                      <li class="active"><a href="#"><img src="images/logout.svg" class="imagHumborger"> התנתק\י</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>




            <div class="navbar navbar-custom navbar-static-top" id="notonapp">
              <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  </div>
                  <div class="collapse navbar-collapse" id="moveRight">
                    <ul class="nav navbar-nav" id="wi">
                        <li class="active"><a href="#">הגדרות</a></li>
                      <li class="active"><a href="#">טיפול משמעת</a></li>
                      <li class="active"><a href="#"> WIFI מעקב </a></li>
                      <li class="active"><a href="#"> GPS מעקב </a></li>
                      <li class="active"><a href="listDogsPage.html">הכלבים שלי</a></li>   
                      <li><a href="index.html">בית</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>               
              </div>
        </header> -->
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" value="joestudent@gmail.com" />
          
          <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
          <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
          
        </form>
        
      </section>  
    </div>
      
    <div class="col-md-4"></div>
      

  </div>
 
  
  
</div>

</body>
</html>