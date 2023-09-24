<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title></title>
        <style type="text/css">
            
        </style>
    </head>
    <body>
        <div>
            <?php include('admin_outline.html'); ?>
        </div>
        
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-7" style="margin-top:128px;">
                <button type="button" class="btn btn-success" onclick="window.location='admin_addmovieform.php';">ADD MOVIE</button>
                <button type="button" class="btn btn-success" onclick="window.location='admin_updatemovieradio.php';">UPDATE MOVIE</button>
                <button type="button" class="btn btn-success" onclick="window.location='admin_deletemoviecheckbox.php';">DELETE MOVIE</button>
                <button type="button" class="btn btn-success" onclick="window.location='admin_outoftheatremovies.php';">MOVIES OUT OF THEATRE</button><br><br>
                <ul class="list-group">
                    <?php
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $dbname="proj";
                    
                        $conn=mysqli_connect($servername, $username, $password, $dbname);
            
                        $sql="SELECT * FROM movie";
                        $query=mysqli_query($conn,$sql);
                        $valid=mysqli_num_rows($query)>0;
            
                        if($valid){
                            while($row=mysqli_fetch_assoc($query)){

                    ?>
                    <li class="list-group-item">
                        <b><?php echo $row['mov_name'] ?></b><br>
                        Language : <?php echo $row['mov_lang'] ?><br>
                        Duration : <?php echo $row['mov_duration'] ?><br>
                        Director : <?php echo $row['mov_director'] ?><br>
                        Release Date : <?php echo $row['release_date'] ?><br>
                        Genre : <?php echo $row['genre'] ?><br>
                        Movie Poster Link : <?php echo $row['mov_img'] ?><br>
                        Movie Banner Link : <?php echo $row['mov_banner'] ?>
                                                
                    </li>
                
                <?php
                            }
                        }
                ?>
                </ul>

            </div>
        </div>

        <?php include('footer.html'); ?>




        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>