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
		<form>
			<div class="col-xs-12">
				<h3 class="center-text">Upload Your Recipe</h3>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="form-group">
	             <label for="recipename">Recipe Name</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
	            <div class="form-group">
	             <label for="recipename">Cuisine</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
	            <div class="form-group">
	             <label for="recipename">Cooking Skill</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
	            <div class="form-group">
	             <label for="recipename">Preferences</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
	            <div class="form-group">
	             <label for="recipename">Meal Type</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
	            <div class="form-group">
	             <label for="recipename">Prep Method</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
	            <div class="form-group">
	             <label for="recipename">Prep Time</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
	            <div class="form-group">
	             <label for="recipename">Main Picture</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
	            <div class="form-group">
	             <label for="recipename">Youtube Video URL</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	            </div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="form-group">
	             <label for="recipename">Ingredients</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" placeholder="tomato,beef,chicken">
	            </div>
				<div class="form-group">
	             <label for="recipename">Directions</label>
	             <input type="text" class="form-control" id="examplejordan1utName2" >
	             <input type="file" name="pic" accept="image/*">
	             <a href="#link">+ Add another step</a>
	            </div>
			</div>
			<div class="col-xs-12">
				<input type="submit" value="Save as Draft">
				<input type="submit" value="Publish">
			</div>
		</form>
	</div>
</div>

<?php
include('footer.php');
?>
</body>
</html>
