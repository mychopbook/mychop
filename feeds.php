<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MyChopBook</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!--<link href="css/lana_style.css" rel="stylesheet">-->

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<?php
include('header_log.php');
?>

<div class="container">
<h2> Feeds </h2>
<hr>
<div class="col-xs-12 feed_new">

<?php
                $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //sort a-z
                $query = "  SELECT r.name, r.datecreated, u.username,r.picture
							FROM recipe r, user u
							WHERE u.iduser = r.user_iduser
							ORDER BY r.datecreated DESC";
                $result = mysqli_query($con,$query);

                //Associative array

                while ($row=mysqli_fetch_assoc($result)){
                    echo '<div class="feed col-lg-3 col-md-4 col-xs-12  col-sm-6">';
                    echo '<img src="'.$row['picture'].'" alt="latest feeds" class=" img-responsive">';
					  echo '<p class="text"><h3>' .$row['name'] .'</h3></p>';
                    echo '<p class="user"><img src="food/user.png" ><h2>'.$row['username'].'</h2></p>';
					
                    echo '<p class="text"><b>Posted on </b>'.$row['datecreated'].'</p>';
                   
                    echo '</div>';
                }

                ?>


</div>
</div>

<?php
include('footer.php');
?>
</body>
</html>
