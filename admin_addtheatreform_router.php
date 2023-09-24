<?php
        if(isset($_POST['submit'])){
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="proj";
            $conn=mysqli_connect($servername, $username, $password, $dbname);
            $th_name = $_POST['th_name'];

            $sql="INSERT INTO theatre (th_id, th_name) VALUES ('','$th_name')";
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('Theatre Inserted Successfully');</script>";
                header("refresh:0;url=admin_theatrelist.php");
            }            
        }
   


    ?>