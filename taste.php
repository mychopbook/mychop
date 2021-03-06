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


<div class="container">
<div class="row">

<!-- Left Menu-->
<div class="col-md-4" id="leftbar">
        
        <div class="rounded">
        <img src="images/usermale.png" alt="profile_icon">
        </div>
          
          <h3>  Profile Image </h3> 
        </div>
        
    <div class="col-md-8">
                    <div class="row">
                    	<div class="col-xs-12">
                            <ul class="nav nav-tabs">
                              <li role="presentation"><a href="profile.php">Profile</a></li>
                              <li role="presentation" class="active"><a href="taste.php">Taste Preference</a></li>
                              <li role="presentation"><a href="history.php">History</a></li>
                            </ul>
                         </div>
                    </div>

<!-- Form -->

                  <div class="col-xs-6">
                  
                     <p class="diets">
                        <h3>Diets</h3>
                        <ul class="left-menu">
                        <li><input type="checkbox" name="diets[]" value="paleo"> Paleo </li>
                        <li><input type="checkbox" name="diets[]" value="gluten Free"> Gluten Free </li>
                        <li><input type="checkbox" name="diets[]" value="vegan"> Vegan </li>
                        <li><input type="checkbox" name="diets[]" value="vegetarian"> Vegeterian </li>
                        <li><input type="checkbox" name="diets[]" value="dairy"> Dairy</li>
                        <li><input type="checkbox" name="diets[]" value="ovo vegeterian"> Ovo Vegeterian </li>
                        <li><h5><a href=""> Display more ... </a> </h5> </li>
                        </ul>
                        </p>
                        
                           <p class="cuisine">
                        <h3>Favorites Cuisine</h3>
                        <ul class="left-menu">
                        <li><input type="checkbox" name="cuisine[]" value="italian"> Italian </li>
                        <li><input type="checkbox" name="cuisine[]" value="french"> French </li>
                        <li><input type="checkbox" name="cuisine[]" value="spanish"> Spanish </li>
                        <li><input type="checkbox" name="cuisine[]" value="cuban"> Cuban </li>
                        <li><input type="checkbox" name="cuisine[]" value="dominican"> Dominican </li>
                        <li><input type="checkbox" name="cuisine[]" value="american">  American </li>
                        <li><input type="checkbox" name="cuisine[]" value="chinese"> Chinese </li>
                        <li><input type="checkbox" name="cuisine[]" value="greek"> Greek </li>
                        <li><input type="checkbox" name="cuisine[]" value="creole"> Creole </li>
                        <li><input type="checkbox" name="cuisine[]" value="mexican"> Mexican </li>
                        <li><input type="checkbox" name="cuisine[]" value="colombian"> Colombian </li>
                        <li><input type="checkbox" name="cuisine[]" value="peruvian"> Peruvian  </li>
                        <li><h5><a href=""> Display more ... </a> </h5> </li>
                        </ul>
                        </p>
                        
                          
                       
                </div>
                
                    
                <div class="col-xs-6">
                    <p class="prep-time">
                        <h3>Preparation Time</h3>
                        <ul class="left-menu">
                        <li><input type="checkbox" name="prep-time[]" value="5min"> 5-10 minutes </li>
                        <li><input type="checkbox" name="prep-time[]" value="15min"> 10-15 minutes  </li>
                        <li><input type="checkbox" name="prep-time[]" value="20min"> 15-20 minutes  </li>
                        <li><input type="checkbox" name="prep-time[]" value="25min"> 25 minutes  </li>
                        <li><input type="checkbox" name="prep-time[]" value="30min"> 30 minutes  </li>
                        <li><input type="checkbox" name="prep-time[]" value="35min"> 35-40 minutes  </li>
                        </ul>
                        </p>
                        
                        <p class="skills">
                        <h3>Cooking Skills</h3>
                        <ul class="left-menu">
                        <li><input type="checkbox" name="skills[]" value="beginner"> Beginner  </li>
                        <li><input type="checkbox" name="skills[]" value="intermediate"> Intermediate  </li>
                        <li><input type="checkbox" name="skills[]" value="master"> Master  </li>
                        </ul>
                        </p>
                        
                          <p class="allergies">
                        <h3>Allergies</h3>
                        <ul class="left-menu">
                        <li><input type="checkbox" name="allergies[]" value="dairy-free"> Dairy-Free </li>
                        <li><input type="checkbox" name="allergies[]" value="gluten-free"> Gluten-free  </li>
                        <li><input type="checkbox" name="allergies[]" value="peanutfree"> PeanutFree  </li>
                        <li><input type="checkbox" name="allergies[]" value="sesamefree"> SesameFree  </li>
                        <li><input type="checkbox" name="allergies[]" value="seafoodfree"> SeaFood Free  </li>
                        </ul>
                        </p>
                        
                
                <div id="btn_profile" >  
                   <!-- Save Bttn -->
                 <button type="button" class="btn btn-red">Save</button>
                </div>
                          
				</div>
  				 </form>
                 
</div> <!-- End Row-->

</div> <!-- End Container -->











<!--end content for top and new chops-->
<!--- FOOTER --->

        <?php include('footer.php');?>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


</body>
</html>
