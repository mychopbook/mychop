<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MyChopBook</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/lana_style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<?php
include('header_log.php');
?>

<div class="container">
<ul class="list-inline">
<li><a href="faq.php"><h2>Customer Support</h2></a></li>
<li><a href="contact.php"><h2>Conact</h2></a></li>
</ul>
<hr>

<form class="text col-lg-8 col-lg-offset-2 col-xs-12 col-sm-12 col-md-8">
  <div class="form-group">
    <label >First Name</label>
    <input type="f_name" class="form-control"  placeholder="First Name">
  </div>
  <div class="form-group">
    <label >Last Name</label>
    <input type="l_name" class="form-control"  placeholder="Last Name">
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label >Subject</label>
    <input type="subject" class="form-control"  placeholder="Subject">
  </div>
  <div class="form-group">
    <label >Message</label>
    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
  </div>
  <button type="submit" class="btn btn-submit">Submit</button>
  
</form>


</div>

<?php
include('footer.php');
?>
</body>
</html>
