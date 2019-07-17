<?php session_start();
// if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
//    echo 'Set and not empty, and no undefined index error!';
   
// }else session_destroy();
?>

 
<?php 
    include 'php/joins/db.php';
    //include 'functions.php';
    //require("functions.php");

    if(!isset($_SESSION["id"]))

     header("Location:login.php");

?>

<?php 
    //$userData=getUserData(getId($_SESSION['name']));
    //$dogData=getDogData(getDogId($_SESSION['name']));

    
    $query  = "SELECT  u.id, p.name, p.pictur, p.dscription

    FROM `tb_users_212` AS u INNER JOIN `tb_dogs_212` AS 

    p ON p.id = u.id

    ORDER BY p.name;";

    //$model2 = mysqli_query($connection, $dogData);
    $model = mysqli_query($connection, $query);

    if(!$model) {

        die("DB query failed.");

    }

?>


<!DOCTYPE html>
<html>

    <head>
        <title>DogFetch</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="includes/style.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
      </head>

    <body id="wrapper">
            <header>
        <div class="navbar navbar-custom navbar-static-top" id="colorHed">
          <div class="container">
            <div class="navbar-header" id="go-right">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;" ></span>
              </button>


              <ul class="nav navbar-nav navbar-left leftSise2" style="float: right;">
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-bell" id="icon-Nav"></span><span class="label label-primary">42</span>
                  </a>
                </li>
                                  <?php if(isset($_SESSION["name"]))
                  echo '<li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-user"  id="icon-Nav"></span>'.  $_SESSION["name"] .' </a>
                  <ul class="dropdown-menu" id="wi2">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span>פרופיל</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span>הגדרות</a></li>
                      <li class="divider"></li>
                      <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                  </li>';
                  else  echo '<li id="wi"><a href="login.php" ><span class="glyphicon glyphicon-user"  id="icon-Nav"></span> התחבר </a></li>'?>
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

                  <?php if(isset($_SESSION["name"]))
                  echo '<li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-user"  id="icon-Nav"></span>'.  $_SESSION["name"] .' </a>
                  <ul class="dropdown-menu" id="wi2">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span>פרופיל</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span>הגדרות</a></li>
                      <li class="divider"></li>
                      <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                  </li>';
                  else  echo '<li id="wi"><a href="login.php" ><span class="glyphicon glyphicon-user"  id="icon-Nav"></span> התחבר </a></li>'?>
                </li>
              </ul>


              <a id="Logo" href="index.php">
                  <span class="fa fa-paw paw1"></span>
                  <h1 class="Hdog">Dog </h1>
                  <span class="logoIMG"></span> 
                  <h1 class="Hfetch"> Fetch</h1> 
                  <span class="fa fa-paw paw2"></span>                            
              </a>  
                            
                          
              </div>
                <div class="collapse navbar-collapse" id="fix">
                  <ul class="nav navbar-nav" id="onlyapp" id="moveRight">
                  <?php if(isset($_SESSION["name"])) echo '
                      <li><a href="#"><img src="images/avatar.svg" class="imagHumborger">הגדרות פרפיל </a></li>
                      <li class="active"><a href="listDogsPage.php"><img src="images/add-dog.svg" class="imagHumborger">הכלבים שלי</a></li>   
                      <li class="active"><a href="#"><img src="images/animal.svg" class="imagHumborger">מעקב טיפול</a></li>
                      <li class="active"><a href="listDOT.php"><img src="images/dot.svg" class="imagHumborger">אזורים אזורים</a></li>
                      <li class="active"><a href="#"><img src="images/colar.svg" class="imagHumborger">מכשיר אלקטרוני</a></li>
                      <li class="active"><a href="logout.php"><img src="images/logout.svg" class="imagHumborger"> התנתק\י</a></li>';
                      else echo '<li><a href="#"><img src="images/avatar.svg" class="imagHumborger">הגדרות פרפיל </a></li>
                      <li class="active"><a href="login.php"><img src="images/add-dog.svg" class="imagHumborger">הכלבים שלי</a></li>   
                      <li class="active"><a href="login.php"><img src="images/animal.svg" class="imagHumborger">מעקב טיפול</a></li>
                      <li class="active"><a href="login.php"><img src="images/dot.svg" class="imagHumborger">אזורים אזורים</a></li>
                      <li class="active"><a href="login.php"><img src="images/colar.svg" class="imagHumborger">מכשיר אלקטרוני</a></li>';?>
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
                    <?php if(isset($_SESSION["name"])) echo '
                    <li class="active"><a href="#">הגדרות</a></li>
                    <li class="active"><a href="table.php"> בקרת טיפול</a></li>
                      <li class="active"><a href="#">טיפול משמעת</a></li>
                      <li class="active"><a href="#"> WIFI מעקב </a></li>
                      <li class="active"><a href="#"> GPS מעקב </a></li>
                      <li class="active"><a href="listDogsPage.php">הכלבים שלי</a></li>   
                      <li><a href="index.php">בית</a></li>';
                      else echo '  <li class="active"><a href="login.php">הגדרות</a></li>
                      <li class="active"><a href="table.php"> בקרת טיפול</a></li>
                      <li class="active"><a href="login.php">טיפול משמעת</a></li>
                      <li class="active"><a href="login.php"> WIFI מעקב </a></li>
                      <li class="active"><a href="login.php"> GPS מעקב </a></li>
                      <li class="active"><a href="login.php">הכלבים שלי</a></li>   
                      <li><a href="index.php">בית</a></li>';?>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>               
              </div>
      </header>

      <main>  
         <div class="container">
            <div class="row" id="namerow">
                <div class="col-xs-6 col-xs-offset-3">
                <h4 class="Hh3"> בחר כלב להשמעה </h4>
            </div>

            <ul class="box">
                <li>
                    <a href="#" ><div class="circle">
                        <div class="front front-popular oneDOG">
                         <div class="title color-1-font glyphicon glyphicon-star"></div>
                        <div class="price color-1-font"><span class="total">גולי</span></div>
                     </div>
                    </a><!-- end div .front -->
                </li>

                <li>
                    <a href="nagtivF.php"><div class="circle">
                            <div class="front front-popular twoDOG">
                             <div class="title color-1-font glyphicon glyphicon-star"></div>
                            <div class="price color-1-font"><span class="total">שימי</span></div>
                            <div class="description"></div>
                         </div>
                        </a>
                </li>

                <li>
                    <a href="#"><div class="circle">
                        <div class="front front-popular treeDOG">
                          <div class="title color-1-font glyphicon glyphicon-star"></div>
                          <div class="price color-1-font"><span class="total">מישמש</span></div>
                        <div class="description"></div>
                       </div><!-- end div .front -->
                    </a>
                      
                </li>  
                
                
                <li>
                    <div class="circle" class="backback">
                      <div class="front front-popular" id="backback">
                        <div class="title color-4-font glyphicon glyphicon-plus"></div>
                        <div class="price color-4-font"><span class="total">כולם</span></div>
                    </div><!-- end div .front -->
                </div>
            </ul>
        </div>
                 
  
      </main>


      <footer>
            <div class="footer-top"> 
               <div class="container">
                 <div class="col-lg-2 col-xs-12 text-center">
                     <a href="#"><i class="fa fa-facebook fa-2x"></i>Facebook</a>
                 </div>
                  <div class="col-lg-2 col-xs-12 text-center">
                     <a href="#"><i class="fa fa-twitter fa-2x"></i>Twitter</a>
                 </div>
                  <div class="col-lg-2 col-xs-12 text-center">
                     <a href="#"><i class="fa fa-flickr fa-2x"></i>Flickr</a>
                 </div>
                  <div class="col-lg-2 col-xs-12 text-center">
                     <a href="#"><i class="fa fa-tumblr fa-2x"></i>Tumblr</a>
                 </div>
                  <div class="col-lg-2 col-xs-12 text-center">
                     <a href="#"><i class="fa fa-github fa-2x"></i>Github</a>
                 </div>
                  <div class="col-lg-2 col-xs-12 text-center">
                     <a href="#"><i class="fa fa-google-plus fa-2x"></i>Google</a>
                 </div>
               </div> 
            </div>  
            
            <div class="container" style="border-top:1px solid grey;">
                <div class="row text-center">   
                    <div class="col-lg-6 col-lg-offset-3">
                        <ul class="menu">
                            <li>
                                <a href="#">בית</a>
                            </li>
                                   
                            <li>
                                <a href="#">אודות</a>
                            </li>
                                   
                            <li>
                                <a href="#">Blog</a>
                            </li>
                                   
                            <li>
                                <a href="#">גלריה</a>
                            </li>
                                   
                            <li>
                                <a href="#">צור קשר</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
      </footer>

      <script src="./includes/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script src="includes/jquery.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="./includes/script.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>