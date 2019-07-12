<!DOCTYPE html>
<html>


    <head>
        <title>DogFetch</title>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        
        <link rel="stylesheet" href="includes/style.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
    </head>
        
    <body id="wrapper">
        <header>
                <div class="navbar navbar-custom navbar-static-top" id="colorHed">
                  <div class="container">
                    <div class="navbar-header" id="go-right">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
        
        
                      <ul class="nav navbar-nav navbar-left leftSise2">
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
        </header>

        <main>
            <?php
            $Dname = $_GET["name"];
            $Owner = $_GET["Owne"];
            $chipId = $_GET["cId"];
            $birthDate = $_GET["bDay"];
            $Owner = $_GET["Owne"];
            $chipId = $_GET["cId"];
            $birthDate = $_GET["bDay"];
            ?>
            <div class="container">    
                <div class="row">
                  <div class="panel panel-default">


                        <div class="panel-body">
                            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                            <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                        </div>
                        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                            <div class="container" >
                                <h2><?php echo $Dname ?></h2>
                                <p>נוצר על ידי:  <b><?php echo $Owner ?></b></p>                                                   
                            </div>
                            <hr>
                                <ul class="container details" >
                                    <li><p>מספר ציפ: <?php echo $chId ?></p></li>
                                    <li><p> תאריך לידה<?php echo $bDay ?></p></li>
                                </ul>
                            <hr>
                        <div class="col-sm-5 col-xs-6 tital " >תאריך ההוספה : 6 מאי </div>
                        <?php echo '<a href="listDogsPage.html" class="btn btn-primary btn-lg active " id="finalize" role="button">סיום</a></div>' ?>
                    </div>
                </div>
            </div>
            </div>



            


            <div class="container">
                <div class="col-xs-20 col-md-10 col-md-offset-4 col-xs-offset-3">
                     <?php 
                    $myFile = "dogsData.json";
                    $arr_data = array(); 
                    $formdata = array(
                        'name'=> $_GET["name"],
                        'breed'=> $_GET["breed"],
                        'age'=>$_GET['age'],
                        'height'=> $_GET['height'],
                        'weight'=> $_GET['weight'],
                        'gender'=> $_GET['gender']
                     );
                     // Push user data to array
	   array_push($arr_data,$formdata);
       //Convert updated array to JSON
	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents($myFile, $jsondata)) {
            echo '<h2><br><br><br> המידע נשמר בהצלחה<br></h2>
            <div class="col-xs-20 col-md-10 col-md-offset-1 col-xs-offset-3">
            <a href="listDogsPage.html" class="btn btn-primary btn-lg active " id="finalize" role="button">סיום</a></div>'
            ;
	    }
	   else 
	        echo "error";
            ?>



<div class="panel-heading">   <h4>  hhhhhה</h4> </div>


                </div>
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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
      
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="./includes/script.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    </body>
</html>
