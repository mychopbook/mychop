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

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h3 class="center-text">Upload Your Recipe</h3>
		</div>
		<form>
			<div class="col-xs-12 col-md-6">
				<ul>
				<li><input placeholder="Recipe Name"></li>
				<li><input placeholder="Cuisine"></li>
				<li><input placeholder="Prep Time"></li>
				<li><input placeholder="Cooking Skill"></li>
				<li><input placeholder="Preferences"></li>
				<li><input placeholder="Meal Type"></li>
				<li><input placeholder="Prep Method"></li>
				<li><input placeholder="Prep Time"></li>
				<li><input placeholder="Main Picture"></li>
				<li><input placeholder="Youtube Video URL"></li>
				</ul>
			</div>
			<div class="col-xs-12 col-md-6">
				<input placeholder="Ingredients">
				<input placeholder="Directions">
			</div>
		</form>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6">
				<input type="submit" value="Save as Draft">
		</div>
		<div class="col-xs-12 col-md-6">
				<input type="submit" value="Publish">
		</div>
	</div>
</div>

<?php
include('footer.php');
?>
</body>
</html>
