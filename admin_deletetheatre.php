<?php
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="proj";
     $th1 = $_POST['thtext'];
     $th = trim($th1);
     $selth = explode(" ", $th);
     $no_of_th = sizeof($selth);
 
     $conn=mysqli_connect($servername, $username, $password, $dbname);

    for($i=0; $i<$no_of_th; $i++){
        $sql="DELETE FROM theatre WHERE th_id = '$selth[$i]'";
        mysqli_query($conn,$sql);
    }

    header("refresh:1;url=admin_theatrelist.php");
     

?>