<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MyChopBook</title>
<<<<<<< HEAD
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!--<link href="css/lana_style.css" rel="stylesheet">-->

<meta name="viewport" content="width=device-width, initial-scale=1">

=======
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
>>>>>>> efd5727eade369482eb128a332013967f13dca41
</head>

<body>
<?php
include('header_log.php');
?>
<<<<<<< HEAD

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
=======
<div class="container">
      
      <div id="Rectangle_1" >
        <p> Featured Videos </p>
        <video id="video1" controls>
<source src="images/video/Tartines_Fig__Ricotta.mp4"
</video>
        </div>
        <div id="Rectangle_2">
          <p> Popular Videos </p>
         </div>
     
    
    
    <!--- video starts here ---->
    <div class="rvideo1"> <a href="https://youtu.be/ooECwDCDC9s" class="food1">Lemon Chicken Romano</a> <img title="lemon-chicken" height="147" alt="lemon-chicken" width="196" src="images/lemon-chicken-romano4-426x640.jpg"> </div>
    
    <div class="rvideo2"> <a href="https://youtu.be/vERImhMkeGI" class="food2">Chocolate Bowls</a> <img title="Chocolate Bowls" height="147" alt="Chocolate Bowls" width="196" src="images/choc bowls 9.jpg"> </div>
    
    <div class="rvideo3"> <a href="https://youtu.be/nli5s3ZhnmA" class="food3">Shrimp Scampi</a> <img title="Shrimp Scampi" height="147" alt="Shrimp Scampi" width="196" src="http://foodnetwork.sndimg.com/content/dam/images/food/fullset/2010/3/25/3/FNM_050110-Weeknight-Dinners-037_s4x3.jpg.rend.sni6col.landscape.jpeg"> </div>
    <h5>Quick & Easy</h5>
  
  <!--- Second row of videos ----->
  
  <div class="rvideo4"> <a href="https://youtu.be/qOaDIHbJbpg" class="food4">Pasta, Pesto, and Peas</a> <img title="blueberry-waffles" height="147" alt="blueberry-waffles" width="196" src="images/Pasta-Pesto.png"> </div>
  
  <div class="rvideo5"> <a href="https://youtu.be/iyxVnaOy6pQ" class="food5">Blueberry Waffles</a> <img title="Blueberry waffle" height="147" alt="Blueberry waffle" width="196" src="images/Blueberry waffle.png"> </div>
  
  <div class="rvideo6"> <a href="https://youtu.be/vUS-rKTuroE" class="food6">Coconut Chia Seed Pudding</a> <img title="Coconut-Chia-Seed-Pudding" height="147" alt="Coconut-Chia-Seed-Pudding" width="196" src="images/Coconut-Chia-Seed-Pudding-9.jpg"> </div>

</div>
<!-- end container -->
>>>>>>> efd5727eade369482eb128a332013967f13dca41

<?php
include('footer.php');
?>
</body>
</html>
