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
                              <li role="presentation" class="active"><a href="profile.php">Profile</a></li>
                              <li role="presentation"><a href="taste.php">Taste Preference</a></li>
                              <li role="presentation"><a href="history.php">History</a></li>
                            </ul>
                         </div>
                    </div>
                    
                    
                    <div class="row">
                    <form>
                        <div class="col-xs-12 col-sm-6">
                            <p class="personal">
                            <h3>Personal Information </h3>
                            
                            <div class="form-group">
                            	<label for="Name"> Name </label>
                            	<input  type="text" class="form-control" name="name" placeholder="You Name" size="40" > 
                            </div>    
                          
                            <div class="form-group">
                                <label for="lastname"> Last Name </label>
                                <input type="text"  class="form-control" name="lastname" placeholder="Last Name" size="40">
                            </div>     
                                
                            <div class="form-group">    
                                <label for="email"> Email </label>
                                <input type="text"  class="form-control"name="email" placeholder="Email" size="40"> 
                            </div>
                                
                            <div class="form-group">    
                                <label for="pass"> Password </label>
                                <input type="text"  class="form-control" name="password" placeholder="Password" size="40"> 
                             </div>
                              
                            </p>
                            
                        </div>
                    
                        <div class="col-xs-12 col-sm-6">
                            <p class="social">
                            <h3>Social Media  </h3>
                           
                                <div class="form-group">
                                    <label for="facebook"> Facebook </label>
                                    <input  type="text"  class="form-control" name="Facebook" placeholder="Facebook Username" size="40" >
                                </div>    
                                    
                                 <div class="form-group">    
                                    <label for="pinterest"> Pinterest </label>
                                    <input type="text"  class="form-control" name="Pinterest" placeholder="Pinterest Username" size="40"> 
                                  </div>  
                                   
                                 <div class="form-group">  
                                    <label for="twitter"> Twitter</label>
                                    <input type="text"  class="form-control" name="Twitter" placeholder="Twitter Username" size="40">
                                 </div>   
                                    
                                 <div class="form-group">   
                                    <label for="instagram">  Instagram </label>
                                    <input type="text"  class="form-control" name="Instagram" placeholder="Instagram Username" size="40"> 
                                </div>
                            </p>
                            
                            <div id="btn_profile" >  
                               <!-- Save Bttn -->
                             <button type="button" class="btn btn-red">Save</button>
                            </div>
                            
                        </div>
                    </form>
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
