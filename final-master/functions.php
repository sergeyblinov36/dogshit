
<?php 
    include 'php/joins/db.php';

    function getUserData($id){

        $array=array();
        $q=myscl_query("SELECT 'name' FROM 'tb_users_212' WHERE 'id'=".$id);
        while($r=mysql_fetch_assoc($q)) {
            $array['id']=$r['id']
            $array['name']=$r['name']
        }
        return $array;
    }

    function getId($name){
        $q=myscl_query("SELECT 'id' FROM 'tb_users_212' WHERE 'name'= ' ".$name." ' ");
        while($r=mysql_fetch_assoc($q)) {
            return $r['id'];
        }
    }


    function getDogData($id){

        $array=array();
        $q=myscl_query("SELECT 'name' FROM 'tb_dogs_212' WHERE 'id'=".$id);
        while($r=mysql_fetch_assoc($q)) {
            $array['id']=$r['id']
            $array['name']=$r['name']
            $array['pictur']=$r['pictur']
            $array['dscription']=$r['dscription']
        }
        return $array;
    }

    function getDogId($name){
        $q=myscl_query("SELECT 'id' FROM 'tb_dogs_212' WHERE 'name'= ' ".$name." ' ");
        while($r=mysql_fetch_assoc($q)) {
            return $r['id'];
        }
    }




?>

<?php 
    
    $query  = "SELECT  u.id, p.name, p.pictur, p.dscription

    FROM `tb_users_212` AS u INNER JOIN `tb_dogs_212` AS 

    p ON p.id = u.id

    ORDER BY p.name;";



    $model = mysqli_query($connection, $query);

    if(!$model) {

        die("DB query failed.");

    }

?>