<?php
    if(isset($_POST['back'])){
        header( "refresh:0;url=index.php" );
    }
    else if(isset($_POST['proceed'])){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="proj";
        $conn=mysqli_connect($servername, $username, $password, $dbname);
        $adminname = $_POST['admin_name'];
        $pass = $_POST['password'];
        $sql = $conn->prepare("CALL login_verification(?,?)");
        $sql->bind_param("ss",$adminname, $pass);
        $sql->execute();
        $res = $sql->get_result();
        if(mysqli_num_rows($res) == 1){
            header( "refresh:2;url=admin_movielist.php" );
        }
        else{
            echo '<script>alert("Invalid Details")</script>';
            header( "refresh:2;url=admin_login.php" );

        }
        


        // $sql = "SELECT * FROM admin WHERE admin_username = 'admin'";

        // $query = mysqli_query($conn,$sql);
        // while($row = mysqli_fetch_assoc($query)){
        //     if($admin_name == $row['admin_username']){
        //         if($pass == $row['admin_password'] ){
        //             header( "refresh:2;url=admin_movielist.php" );
        //         }
        //         else{
        //             echo '<script>alert("invalid password")</script>';
        //             header( "refresh:2;url=admin_login.php" );
        //         }
        //     }
        //     else{
        //         echo '<script>alert("invalid Details")</script>';
        //         header( "refresh:2;url=admin_login.php" );
         //     }
        // }
    } 
    




?>