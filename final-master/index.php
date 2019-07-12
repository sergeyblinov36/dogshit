<?php session_start();
// if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
//    echo 'Set and not empty, and no undefined index error!';
   
// }else session_destroy();

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
                <?php if(isset($_SESSION["name"]))
                echo '<li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                class="glyphicon glyphicon-user"  id="icon-Nav"></span>'.  $_SESSION["name"] .' <b class="caret"></b></a>
                <ul class="dropdown-menu" id="wi2">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>פרופיל</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-cog"></span>הגדרות</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                  </ul>
                </li>';
                else echo '<li><a href="login.php">התחבר</a></li>'?>

<!-- 
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  <!-- class="glyphicon glyphicon-user"  id="icon-Nav"></span><?php if(isset($_SESSION["name"]))echo $_SESSION["name"]; else echo '<a href="login.php>התחבר</a>'; ?>  <b class="caret"></b></a> 
                  <ul class="dropdown-menu" id="wi2">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span>פרופיל</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span>הגדרות</a></li>
                      <li class="divider"></li>
                      <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                  </li>
              </ul>  
                         -->


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
            
            <section class="HomeScren">
                    <section>
                            <!-- BEGIN LIST -->
                            <ul class="box">
                            <!-- BEGIN LIST ELEMENT -->
                              <li>
                                <div class="circle">
                                  <div class="front front-popular oneDOG">
                                    <div class="title color-1-font glyphicon glyphicon-star"></div>
                                    <div class="price color-1-font"><span class="total">גולי</span></div>
                                    <div class="description">76%</div>
                                  </div><!-- end div .front -->
                                  <div class="popular color-1-font glyphicon glyphicon-star"></div>
                                  <div class="back color-1-bg info">
                                    <div class="title">גולי</div>
                                    <div class="description">
                                      <a href="profille.html" class="btn btn-danger" style="padding: 0px;">צפה בפרופיל</a>
                                    </div><!-- end div .description -->
                                  </div><!-- end div .back color-1-bg info -->
                                </div><!-- end div .circle -->
                              </li>
                            <!-- END LIST ELEMENT -->
                            <!-- BEGIN LIST ELEMENT -->
                            <li>
                                <div class="circle">
                                  <div class="front front-popular twoDOG">
                                    <div class="title color-1-font glyphicon glyphicon-star"></div>
                                    <div class="price color-1-font"><span class="total">שימי</span></div>
                                    <div class="description">82%</div>
                                  </div><!-- end div .front -->
                                  <div class="popular color-1-font glyphicon glyphicon-star"></div>
                                  <div class="back color-1-bg info">
                                    <div class="title">שימי</div>
                                    <div class="description">
                                      <a href="#" class="btn btn-danger" style="padding: 0px;">צפה בפרופיל</a>
                                    </div><!-- end div .description -->
                                  </div><!-- end div .back color-1-bg info -->
                                </div><!-- end div .circle -->
                              </li>
                            <!-- END LIST ELEMENT -->
                            <!-- BEGIN LIST ELEMENT -->
                            <li>
                                <div class="circle">
                                  <div class="front front-popular treeDOG">
                                    <div class="title color-1-font glyphicon glyphicon-star"></div>
                                    <div class="price color-1-font"><span class="total">מישמש</span></div>
                                    <div class="description">40%</div>
                                  </div><!-- end div .front -->
                                  <div class="popular color-1-font glyphicon glyphicon-star"></div>
                                  <div class="back color-1-bg info">
                                    <div class="title">מישמש</div>
                                    <div class="description">
                                      <a href="#" class="btn btn-danger" style="padding: 0px;">צפה בפרופיל</a>
                                    </div><!-- end div .description -->
                                  </div><!-- end div .back color-1-bg info -->
                                </div><!-- end div .circle -->
                              </li>
                            <!-- END LIST ELEMENT -->
                            <!-- BEGIN LIST ELEMENT -->
                              <li>
                                <div class="circle" class="backback">
                                  <div class="front front-popular" id="backback">
                                    <div class="title color-4-font glyphicon glyphicon-plus"></div>
                                    <div class="price color-4-font"><span class="total">הוסף</span></div>
                                  </div><!-- end div .front -->
                                  <div class="popular color-4-font glyphicon glyphicon-time"></div>
                                  <div class="back color-4-bg info">
                                    <div class="title">  <a href="AddDogPage.html">
                                        <span class="glyphicon glyphicon-plus"></span>
                                      </a></div>
                                    <div class="description">
                                      <p>הוסף כלב</p>
                                    </div><!-- end div .description -->
                                  </div><!-- end div .back color-4-bg info -->
                                </div><!-- end div .circle -->
                              </li>
                            <!-- END LIST ELEMENT -->
                            </ul>
                          <!--END LIST -->
                          </section>

            </section>      


            <section class="butMain">
                <div class= "fille">
                    <button class="Mq"><img src="images/folder.svg" class="ImgIcon" ></button>
                    <h4 class="Hh3">פידבקים</h4>
                </div>

                <div class= "control">
                    <button class="Mq"><img src="images/control.png" class="ImgIcon" ></button>
                    <h4 class="Hh3">בקרה</h4>
                </div>
    
                <div class= "sound">
                    <button class="Mq"><img src="images/speaker.svg"  class="ImgIcon"> </button>
                    <h4 class="Hh3">חיבור לשמע</h4>
                </div>
    
                <div class= "hart">
                    <button class="Mq"><img src="images/hart.png" class="ImgIcon" ></i></button>
                    <h4 class="Hh3">מדדי לב</h4>
                </div>
    
                <div class= "camara">
                    <button class="BigButt"><img src="images/camera.svg" class="BigIcon"></button>
                    <h4 class="Hh3">צפיה בזמן אמת</h4>
                </div>
            </section>

            <div class="row HomeScrenWEB">

                <div class="content-slider">
                    <div class="container-fluid">
                        <div id="main_area">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-sm-12 main_area_mg0" id="slider">
                                    <!-- Top part of the slider -->
                                    <div class="row">
                                     <div class="col-lg-6">
                                                <p class="content-p col-lg-offset-2">כלבים של החיים</p>
                                                    <div class="col-sm-12" id="carousel-text"></div>
                                                    <div id="slide-content" >
                                                        <div style="clear:both"></div>
                                                        <p class="sub-text col-lg-offset-2">מצאו המלצות לטיפול בעיות התנהגות ובקר את כלבך מרחוק</p>
                                                        <p class="newslleter col-lg-offset-2">מצאו כלבים באזורך לטיפול משותף</p>
                                                          <nav class="navbar navbar-default nav-transparent col-lg-offset-2">
                                                                <div class="nav nav-justified navbar-nav">
                                                         
                                                                    <form class="navbar-form navbar-search" role="search">
                                                                        <div class="input-group input-email input-group-lg"">
                                                                
                                                                            <input type="text" class="form-control fg" placeholder=" אזור מגורים או יעד">
                                                                        
                                                                            <div class="input-group-btn">
                                                                                <button type="button" class="btn btn-search btn-info fg">
                                                                                    <span class="label-icon"> חפש כלבים באזורך</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>  
                                                                    </form>   
                                                                 
                                                                </div>
                                                            </nav>
                                                        <div style="display: none;">  
                                                            <div id="slide-content-0">
                                                                <h2 class="myshadow col-lg-offset-2">Slider One</h2>
                                                            </div>
        
                                                            <div id="slide-content-1">
                                                                <h2 class="myshadow col-lg-offset-2">Slider Two</h2>
                                                            </div>
        
                                                            <div id="slide-content-2">
                                                                <h2 class="myshadow col-lg-offset-2">Slider Three</h2>
                                                            </div>
                                                            <div id="slide-content-3">
                                                                <h2 class="myshadow col-lg-offset-2">Slider Four</h2>
                                                            </div>
        
                                                            <div id="slide-content-4">
                                                                <h2 class="myshadow col-lg-offset-2">Slider Five</h2>
                                                            </div>
        
                                                            <div id="slide-content-5">
                                                                <h2 class="myshadow col-lg-offset-2">Slider Six</h2>
                                                            </div>
                                                        </div> 
                                                    </div>
                                            </div>
                                    <div class="col-lg-6 pd0">
                                        <div class="col-sm-12" id="carousel-bounding-box">
                                            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner bordered">
                                                    <div class="item active" data-slide-number="0">
                                                    <img src="images/one.jpg" class="img-responsive img-left"></div>
        
                                                    <div class="item" data-slide-number="1">
                                                    <img src="images/two.jpg" class="img-responsive img-left"></div>
        
            
                                                </div><!-- Carousel nav -->
                                               
                                            </div>
                                        </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div><!--/Slider-->
        
                        </div>
                    </div>
                </div>
        

                <script>
            jQuery(document).ready(function($) {
         
                $('#myCarousel').carousel({
                        interval: 5000
                });
         
                $('#carousel-text').html($('#slide-content-0').html());
         
         
                // When the carousel slides, auto update the text
                $('#myCarousel').on('slid.bs.carousel', function (e) {
                        var id = $('.item.active').data('slide-number');
                        $('#carousel-text').html($('#slide-content-'+id).html());
                });
            });
            </script>




     
   



                      <div class="row" id="displayit">
                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="service-block">
                                  <div class="service-icon">
                                      <img src="images/playtime.svg" class="imagHome2" alt="">
                                  </div>
                                  <div class="service-content">
                                       <h4><a href="#">
                                         פעילות משחק </a></h4>
                                      <p>משחקים מרחוק</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="service-block">
                                  <div class="service-icon">
                                      <img src="images/dog-food.svg"  class="imagHome2" alt="">
                                  </div>
                                  <div class="service-content">
                                      <h4> <a href="#">
                                          תזונה </a></h4>
                                      <p>מעקב תזונה ובריאות</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="service-block">
                                  <div class="service-icon">
                                      <img src="images/dog-22.svg"  class="imagHome2" alt="">
                                  </div>
                                  <div class="service-content">
                                      <h4><a href="#">
                                           התקדמות</a></h4>
                                      <p>ניהול מעקב טיפול משמעתי,מדדי לב,ספורט,תזונה</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="service-block">
                                  <div class="service-icon">
                                      <img src="images/dog-11.svg"   class="imagHome2" alt="">
                                  </div>
                                  <div class="service-content">
                                       <h4><a href="#">
                                          משמעת</a></h4> 
                                      <p>התמודדות עם בעיות משמעת</p>
                                  </div>
                              </div>
                          </div>
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

        <script type="text/javascript">
            $(document).ready(function() {
              $('.carousel').carousel({interval: 7000});
            });
          </script>


    </body>
</html>