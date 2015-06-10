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
<h2>Saved Receipes</h2>
<hr>
<div class="date col-lg-12 col-xs-12 col-sm-12 col-md-12">My Chops</div>
<ul class="list-inline center-block text-center col-lg-12  col-xs-10 col-xs-offset-2 col-sm-10 col-sm-offset-2 col-md-12 ">
 <?php
                $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //sort a-z
                $query = "  SELECT DISTINCT r.picture, m.name
							FROM recipe r, mychops m, rating rat, user u
							WHERE m.recipe_idrecipe = r.idrecipe
							AND m.user_iduser = 1
							AND r.idrecipe = rat.recipe_idrecipe";
                $result = mysqli_query($con,$query);

                //Associative array

                while ($row=mysqli_fetch_assoc($result)){
                    
                    echo '<li class="  col-lg-3  "><img src="'.$row['picture'].'" alt="recipe pioture" class=" img-responsive">';
                    echo '<span class="caption">' .$row['name'] .'</span>';
                    echo '<span class="rating"></span>';
                    echo '</li>';
					
                }

                ?>
</ul>
<!--


<div class="date col-lg-12 col-xs-12 col-sm-12 col-md-12">April 2015</div>

<ul class="list-inline food col-lg-12  col-xs-10 col-xs-offset-2 col-sm-10 col-sm-offset-2 col-md-12 ">
  <li><a href="#"><img src="food/7.png"></a>
  <span class="rating"><a href="#"><img src="food/rating_5.png"></a></span>
  <span class="caption">Grrrrr Eggs</span>
  </li>
  <li><a href="#"><img src="food/8.png"></a>
  <span class="rating"><a href="#"><img src="food/rating_2.png"></a></span>
  <span class="caption">Cucumber Bonanza</span>
  </li> 
  <li><a href="#"><img src="food/9.png"></a>
  <span class="rating"><a href="#"><img src="food/rating_5.png"></a></span>
  <span class="caption">Avocado Salad</span>
  </li>
  <li><a href="#"><img src="food/10.png"></a>
  <span class="rating"><a href="#"><img src="food/rating_3.png"></a></span>
  <span class="caption">Tomato Bisque</span>
  </li>  
  <li><a href="#"><img src="food/11.png"></a>
  <span class="rating"><a href="#"><img src="food/rating_5.png"></a></span>
  <span class="caption">Onion Bonanza</span>
  </li>  
  <li><a href="#"><img src="food/12.png"></a>
  <span class="rating"><a href="#"><img src="food/rating_0.png"></a></span>
  <span class="caption">Salsa</span>
  </li>  
</ul>-->



</div>

<?php
include('footer.php');
?>
</body>
</html>