<?php
include "db.php";
include "config.php";


$id=$_SESSION["id"];
$sql = "SELECT d.*
        FROM `tb_user-dog_212`u ,`tb_dogs_212` d
        WHERE u.id='" .$id ."'AND u.snum=d.snum ";




$res = mysqli_query($connection,$sql);
do{$row = mysqli_fetch_array($res);
    if(is_array($row)){
         if ($row["pictur"]==NULL){
            $pic='images/anonim.png';
            
        }
        else $pic=$row["pictur"];
        
        //get care takers
        $query = 'SELECT u.name FROM `tb_user-dog_212` d,`tbl_users_212` u WHERE d.snum="'.$row["snum"].'" AND d.id=u.id ';
        $result = mysqli_query($connection,$query);
        
        echo '
        <div class="well" id="well">
                            <div class="media">
                                <a class="pull-right" href="profille.php">
                                    <img class="media-object" src="'.$pic.'">
                                </a>
                                <div class="media-body">
                                    <a href="profille.php" class="btn btn-footer1">צפה בפרופיל</a>

                                    <h4 class="media-heading hH4">'.$row["name"].'</h4>
                                    <p class="text-right">'; do{$human = mysqli_fetch_array($result);
                                        if(is_array($human)){
                                            echo $human["name"].',';}}while($human); echo'בטיפול של:</p>
                                    <a href="profille.php" class="btn btn-footer2">צפה בפרופיל</a>

                                    <p class="p2">'.$row["name"]. '  ' .$row["description"].'</p>
                                    <ul class="list-inline list-unstyled" style="float: right;">
                                        <li><span><i class="glyphicon glyphicon-calendar"></i> עודכן ב15 במאי </span></li>
                                        <li>|</li>
                                        <span><i class="glyphicon glyphicon-bell"></i> התראות</span>
                                        <li>|</li>
                                        <li>
                                        <span class="glyphicon glyphicon-heart"></span>
                                                <span class="glyphicon glyphicon-heart"></span>
                                                <span class="glyphicon glyphicon-heart"></span>
                                                <span class="glyphicon glyphicon-heart"></span>
                                                <span class="glyphicon glyphicon-heart"></span>
                                                <span class="	glyphicon glyphicon-heart-empty"></span>
                                        </li>
                                        <li>|</li>
                                        <li>
                                        <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                            <span><i class="glyphicon glyphicon-pencil"></i></span>
                                            <span><i class="glyphicon glyphicon-map-marker"></i></span>
                                            <span><i class="glyphicon glyphicon-picture"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>'
    ;}
}
while($row);
    



