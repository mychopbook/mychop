<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Chop Book</title>
    <!--chop theme-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Profile theme -->
    <link rel="stylesheet" href="css/juli_style.css">
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


<!-- Form -->


<div class="row">
<div class="col-sm-9">
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="../julissaroa.co/mychopbookfolder/profile.html">Profile</a></li>
  <li role="presentation"><a href="../julissaroa.co/mychopbookfolder/taste.html">Taste Preference</a></li>
  <li role="presentation"><a href="../julissaroa.co/mychopbookfolder/history.html">History</a></li>
</ul>


<div class="row">
<div class="col-xs-8 col-sm-6">
 <form>
    <p class="personal">
    <h4>Personal Information </h4>
    <ul>
    <li> Name </br>
    <input  type="text" name="name" placeholder="You Name" size="40" > </li>
    
    <li> Last Name </br>
    <input type="text" name="lastname" placeholder="Last Name" size="40"> </li> 
    
    <li> Email </br>
    <input type="text" name="email" placeholder="Email" size="40"> </li>
    
    <li> Password </br>
    <input type="text" name="password" placeholder="Password" size="40"> </li>
    </ul>
    </p>
    
</div>

    

<div class="row">
<div class="col-xs-8 col-sm-6">
    <p class="social">
    <ul>
    
    <li>
    Facebook </br>
    <input  type="text" name="Facebook" placeholder="Facebook Username" size="40" ></li>
    
    <li>
    Pinterest </br>
    <input type="text" name="Pinterest" placeholder="Pinterest Username" size="40"> </li>
    
    <li>
    Twitter </br>
    <input type="text" name="Twitter" placeholder="Twitter Username" size="40"> </li>
    
    <li>
    Instagram </br>
    <input type="text" name="Instagram" placeholder="Instagram Username" size="40"> </li>
    
    </ul>
    </p>
    
<div id="btn_profile" >  
   <!-- Save Bttn -->
 <button type="button" class="btn btn-warning">Save</button>
</div>
    
</div>
   </form>
 
 </div>  
</div>

</div>
</div>
</div>
</div>














<!--end content for top and new chops-->

        <?php include('footer.php');?>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


</body>
</html>
