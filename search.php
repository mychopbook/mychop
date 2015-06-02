<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Chop Book</title>
    <!--chop theme-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


</head>
<body>

<?php include('header.php');?>
    <div class="">

            <div class="hero">
                <div class="container_fluid hero-content">

                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn  btn-create" type="submit">Create Recipe</button>

                </div>

            </div>

    </div>

    <div class="">
            <a class="col-sm-6 tab">Top Chop Recipies</a>
            <a class="col-sm-6 tab">New Chop Recipies</a>
    </div>
    <div class="clearfix"></div>
<!--start content for top and new chops-->

        <div class="container top_new">
            <div class="row">
            <?php 
			$con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");
			if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "    ";
$search = $_GET['search'];
$query="SELECT distinct r.name, u.username, r.picture, s.direction
		FROM recipe r, user u ,steps s
		WHERE  r.user_iduser=u.iduser 
		
AND r.idrecipe =s.recipe_idrecipe 
AND (r.name LIKE '%$search%'
		OR s.direction LIKE '%$search%')
		ORDER BY datecreated DESC LIMIT 3";
$result = mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($result)){
	echo '<div class="col-sm-4 chop_item">';
	echo '<img src="'.$row['picture'].'" alt="top chop" class="img-circle img-responsive">';
	echo '<h3>'.$row['name']. "</h3>";
	echo '<a>'.$row['username']. "</a>";
	echo '<a>'.$row['direction']. "</a>";

	echo '</div>';
	}


// Free result set
mysqli_free_result($result);

mysqli_close($con);

?>
		
            </div>
        </div><!--end container-->


    <!--end content for top and new chops-->

        <?php include('footer.php');?>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>