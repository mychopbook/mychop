<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MyChopBook</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php
include('header.php');
?>
<div class="recipetitle">
<div class="container">
	<div class="row">
			<?php
                $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //sort a-z
                $query = "  SELECT r.name, u.username, rt.ratingnumber
                            FROM recipe r, user u, rating rt
                            WHERE r.user_iduser = u.iduser
                            AND r.idrecipe = rt.recipe_idrecipe
                            AND r.idrecipe = 1";
                $result = mysqli_query($con,$query);

                //Associative array

                while ($row=mysqli_fetch_assoc($result)){
                	echo '<div class="col-xs-12 col-md-9">';
                    echo '<h2>' .$row['name'] .'</h2>';
                    echo '<span>'.$row['username'].'</span>';
                    echo '</div>';
                    echo '<div class="col-xs-12 col-md-1">';
		        	echo '<h3>Rating:</h3>';
					echo '</div>';
					echo '<div class="col-xs-12 col-md-2">';
					echo '<img src="images/rating' .$row['ratingnumber'] . '.png" alt="rating"/>';
					echo '</div>';
                }

        	?>
	</div><!-- end row -->
</div><!-- end container -->
</div><!-- end recipetitle -->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<!--<img src="images/recipeimg.png" alt="rating" width="90%"/>-->
			<!--recipe picture query-->
			<?php
                            $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                            // Check connection
                            if (mysqli_connect_errno())
                            {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            //sort a-z
                            $query = "  SELECT picture
                            			FROM recipe
                            			WHERE idrecipe= 1";
                            $result = mysqli_query($con,$query);

                            //Associative array

                            while ($row=mysqli_fetch_assoc($result)){
                            	echo '<img src="'.$row['picture'].'" alt="recipepicture" width="90%">';

                            }

                    	?>
                    	<!--recipe picture query end-->
		</div>
				<?php
                $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //sort a-z
                $query = "  SELECT c.name as cuisinename, r.preptime_hours, r.preptime_mins, r.cookingskill, p.name as preferencename, m.name as mealtypename, pm.name as prepmethodname
                            FROM recipe r, recipe_has_cuisine rhc, cuisine c, recipe_has_preference rhp, preference p, recipe_has_mealtype rhm, mealtype m, recipe_has_prepmethod rhpm, prepmethod pm
                            WHERE r.idrecipe = rhc.recipe_idrecipe
                            AND rhc.cuisine_idcuisine = c.idcuisine
                            AND r.idrecipe = rhp.recipe_idrecipe
                            AND rhp.preference_idcategory = p.idcategory
                            AND r.idrecipe = rhm.recipe_idrecipe
                            AND rhm.mealtype_idmealtype = m.idmealtype
                            AND r.idrecipe = rhpm.recipe_idrecipe 
                            AND rhpm.prepmethod_idprepmethod = pm.idprepmethod                        
                            AND r.idrecipe = 1";
                $result = mysqli_query($con,$query);

                //Associative array

                while ($row=mysqli_fetch_assoc($result)){
                    echo '<div class="col-xs-12 col-md-4 recipeinfolist">';
		        	echo '<h3>Recipe Details:</h3>';
					echo '<ul>';
					echo '<li><strong>Cuisine</strong>: ' . $row['cuisinename'] . '</li>';
					echo '<li><strong>Prep Time</strong>: ' . $row['preptime_hours']. ' hour(s) and ' . $row['preptime_mins'] . 'min(s)' . '</li>';
					echo '<li><strong>Cooking Skill</strong>: ' . $row['cookingskill'] . '</li>';
					echo '<li><strong>Preferences</strong>: ' . $row['preferencename'] . '</li>';
					echo '<li><strong>Meal Type</strong>: ' . $row['mealtypename'] . '</li>';
					echo '<li><strong>Prep Method</strong>: ' . $row['prepmethodname'] . '</li>';
					echo '</ul>';
					echo '<a href="#link" alt="Add to MyChops">+ Add This Recipe to MyChops</a>';
					echo '</div>';
                }

        	?>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-7">
			<h3>Directions:</h3>
			<ol>
			<?php
                                        $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                                        // Check connection
                                        if (mysqli_connect_errno())
                                        {
                                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }
                                        //sort a-z
                                        $query = "  SELECT picture,direction
                                                    FROM steps
                                                    WHERE recipe_idrecipe = 1";
                                        $result = mysqli_query($con,$query);

                                        //Associative array

                                        while ($row=mysqli_fetch_assoc($result)){
                                        	echo '<li>'.$row['direction'];
                                        	echo '<img src="'.$row['picture'].'" alt="step" width="100%">';
                                        	echo '</li>';
                                        }

                                	?>
				<!--<li>Peel and dice the mango or papaya, and put in a medium bowl. Trim the strawberries' stems and half or quarter, if large. Add to the bowl of fruit. Peel and dice the kiwi, add to bowl. Peel and slice the bananas, add to bowl.
                <img src="images/step1.jpg" alt="step" width="100%"/>
				</li>
				<li>Cut the top and bottom off the oranges just deep enough to expose the inner fruit. Following the curve of the fruit cut the skin and pith off the orange in panels. Holding the orange over the bowl cut between the membranes to free the citrus segments. Let them fall into the bowl as they are cut free. By hand, squeeze all the juice from the remaining membrane over the fruit, then discard. Repeat with the other orange.
				<img src="images/step2.jpg" alt="step" width="100%"/>
				</li>
				<li>Lightly stir the honey and Grand Marnier, if using, into the fruit. Strip the mint leaves off the stem, tear, or chop into smaller pieces, and stir into the fruit salad. Add the berries and set aside for 10 minutes or up to 2 hours. Serve.
				<img src="images/step3.jpg" alt="step" width="100%"/>
				</li>-->
			</ol>
		</div>
		<div class="col-xs-12 col-md-5 ingredientslist">
		<h3>Ingredients:</h3>
			<ul>
             <?php
                $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //sort a-z
                $query = "  SELECT i.name, rhi.ingredient_amount,rhi.ingredient_unit
							FROM ingredient i, recipe_has_ingredient rhi, recipe r
							WHERE rhi.recipe_idrecipe=r.idrecipe
							AND i.idingredient= rhi.ingredient_idingredient
							AND r.idrecipe= 1";
                $result = mysqli_query($con,$query);

                //Associative array

                while ($row=mysqli_fetch_assoc($result)){
                    echo '<li>'.$row['ingredient_amount']."    ".$row['ingredient_unit']."   ".$row['name']."    (+ Add to shopping list )</li>";
                   
                }

                ?>
				
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6 reviewslist">
		<h3>Reviews:</h3>
		<?php include('includes/timeago.php');?>
		<!---review query-->
					<ul>
		<?php
                        
                        $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                        // Check connection
                        if (mysqli_connect_errno())
                        {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                        $query = "  SELECT u.username, rw.comment, rw.datecreated
                        			FROM user as u, review as rw
                        			WHERE u.iduser = rw.user_iduser AND rw.recipe_idrecipe = 1
                        			ORDER BY rw.datecreated DESC";
                        $result = mysqli_query($con,$query);
                        //Associative array

                        while ($row=mysqli_fetch_assoc($result)){
                            echo '<li>' .$row['comment'];
                            echo '<p class="'.'reviewstamp'.'">'.'<b>' .$row['username'].'</b>';
                            echo '<span>'.'  posted '.' ';
                            echo timeAgoInWords($row["datecreated"]).'</span>'.'</p>';

                            echo '</li>';

                        }

                        ?>
                     </ul>

			<!--<ul>
				<li>This is absolutely my favorite fruit salad. My guests love it, too!<br>-Angela</li>
				<li>This is absolutely the best fruit salad I have ever served. Besides being a beautiful presentation, the flavors were beyond compare to any fruit salad I have had. I have omitted and added a few ingredients here and there - still the best!!!!<br>-Laura</li>
				<li>I made this for a family barbecue last weekend and boy was it good! I used orange juice instead of the orange liquor because kids were eating it. I also used fruit that my grocery store had so I added extra strawberries instead of raspberries. Very refreshing and lite tasting.<br>-Jaqueline</li>
				<li>I've made this for 3 different occasions and everyone has absolutely loved it - even when the guests prefer cakes for dessert!<br>-Charity</li>
				<li>I have made this salad multiple tme and it is always a hit.<br>-Jennifer</li>
			</ul>-->
		</div>
		<div class="col-xs-12 col-md-6">
		<h3>Video:</h3>
         <?php
                $con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //sort a-z
                $query = "  SELECT recipe.videolink
							from recipe
							where recipe.idrecipe=1";
                $result = mysqli_query($con,$query);

                //Associative array

                while ($row=mysqli_fetch_assoc($result)){
                  echo '<iframe width="100%" height="315" src ="'.$row['videolink'].'"  frameborder="0" allowfullscreen></iframe>';
                 
                   
                }

                ?>
		
		</div>
	</div>

</div>


<?php
include('footer.php');
?>
</body>
</html>