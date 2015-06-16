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
          <?php
		  
		  
		  		$con = mysqli_connect("localhost","mychopbook","mychopbook","mychopbook");

                        // Check connection
                        if (mysqli_connect_errno())
                        {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
		  		$query = " SELECT `email`, `username`, `name`, `lastname`
						   FROM `user` 
						   WHERE `iduser` = 1" ;
						   
				$result = mysqli_query($con,$query);
                        //Associative array
		   

		  
		  ?>
          
        </div>
        
    <div class="col-md-8">
                    <div class="row">
                    	<div class="col-xs-12">
                            <ul class="nav nav-tabs">
                              <li role="presentation" ><a href="profile.php">Profile</a></li>
                              <li role="presentation"><a href="taste.php">Taste Preference</a></li>
                              <li role="presentation" class="active"><a href="../julissaroa.co/mychopbookfolder/history.html">History</a></li>
                            </ul>
                         </div>
                    </div>
                    
                    
                    <div class="row">
                    <form>
                        <div class="col-xs-12 col-sm-6">
                            <p class="personal">
                           	   <h3>Breakfast </h3>
                            
                            	<ul>
                                	<li><a href="#"> 10-Minute Energizing Oatmeal </a></li>
                                    <li><a href="#"> Granola with Fresh Fruit </a></li>
                                    <li><a href="#"> Healthy Breakfast Frittata </a></li>
                                    <li><a href="#"> High Fiber Cereal </a></li>
                                    <li><a href="#"> Strawberry Smoothie </a></li>
                                    <li><a href="#"> Poached Eggs over Spinach & Mushrooms </a></li>
                                    <li><a href="#"> Perfect Oatmeal </a></li>
                                    <li><a href="#"> Italian Tofu Frittata </a></li>
                                    <li><a href="#"> Poached Eggs Over Sautéed Greens </a></li>
                            		
                              	</ul> 
                            </p>
                            
                        </div>
                    
                        <div class="col-xs-12 col-sm-6">
                            <p class="social">
                            <h3> Lunch </h3>
                           
                                
                            	<ul>
                                	<li><a href="#"> Greek Salad </a></li>
                                    <li><a href="#"> Warm Spinach Salad with Tuna </a></li>
                                    <li><a href="#"> Oyster and Clam Chowder </a></li>
                                    <li><a href="#"> Spicy Cabbage Soup </a></li>
                                    <li><a href="#"> 15-Minute Seared Tuna with Sage </a></li>
                                    <li><a href="#"> Healthy Sautéed Seafood with Asparagus </a></li>
                                    <li><a href="#"> Pasta with Clams </a></li>
                                    <li><a href="#"> Salmon with Mustard and Ginger </a></li>
                                    <li><a href="#"> Fresh Herbed Chicken Breasts </a></li>
                            		
                              	</ul> 
                            </p>
                            
                           </div>
                           
                           
                            <div class="col-xs-12 col-sm-6">
                            <p class="social">
                            <h3> Snacks  & Entrees </h3>
                           
                                
                            	<ul>
                                	<li><a href="#"> Lentil Salad </a></li>
                                    <li><a href="#"> Mexican Cheese Salad </a></li>
                                    <li><a href="#"> 5-Minute Miso Soup with Dulse (sea vegetable) </a></li>
                                    <li><a href="#"> Super Energy Kale Soup </a></li>
                                    <li><a href="#"> Healthy Veggie Salad </a></li>
                                    <li><a href="#"> Tan Tan Noodles </a></li>
                                    <li><a href="#"> Asian-Flavored Broccoli with Tofu</a></li>
                                    <li><a href="#"> Hummus with Crudités </a></li>
                                    <li><a href="#"> Olive Tapenade </a></li>
                            		
                              	</ul> 
                            </p>
                            
                           </div>
                           
                           
                           <div class="col-xs-12 col-sm-6">
                            <p class="social">
                            <h3> Dinner  </h3>
                           
                                
                            	<ul>
                                	<li><a href="#"> Mediterranean Cod </a></li>
                                    <li><a href="#"> Sesame Braised Chicken & Cabbage</a></li>
                                    <li><a href="#"> Indian Style Lamb with Sweet Potatoes </a></li>
                                    <li><a href="#"> Roast Leg of Lamb </a></li>
                                    <li><a href="#"> 10-Minute Rosemary Lamb Chops </a></li>
                                    <li><a href="#"> 15-Minute Healthy Sautéed Chicken & Bok Choy</a></li>
                                    <li><a href="#"> Quick Broiled Chicken Breast with Honey-Mustard Sauce </a></li>
                                    <li><a href="#"> Roast Turkey Breast with Chipotle Chili Sauce </a></li>
                                    <li><a href="#"> Salmon with Dill Sauce </a></li>
                            		
                              	</ul> 
                            </p>
                            
                           </div>
                           
                           
                           
                           
                           
                           
                            <div id="btn_profile" >  
                               <!-- Save Bttn -->
                             <button type="button" class="btn btn-red">Save</button>
                            </div>
                            
                     </form>
                       </div>
                    
                    </div>  

    </div> <!-- col-8 -->
    
    
 
    
    
    </div><!-- row -->
</div><!-- container -->





<!--end content for top and new chops-->

        <?php include('footer.php');?>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


</body>
</html>
