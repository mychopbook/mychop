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
<h2> Chop Videos </h2>
<hr>
<div class="col-xs-12 feed_video">

<?php
                $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //sort a-z
                $query = "  SELECT recipe.videolink, recipe.name
							from recipe ";
                $result = mysqli_query($con,$query);

                //Associative array

                while ($row=mysqli_fetch_assoc($result)){
					 echo '<div class="feed col-lg-4 col-md-6 col-xs-12  col-sm-12">';
                    echo '<iframe width="100%" height="250" src ="'.$row['videolink'].'"  frameborder="0" allowfullscreen></iframe>';
					  echo '<p class="text"><h3>' .$row['name'] .'</h3></p>';
                    
                   
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
