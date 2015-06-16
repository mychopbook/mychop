<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login|Register</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!--chop theme-->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


</head>
<body>
<?php include('header.php');?>
    <div class="container_fluid">
        <div class="">
                <div class="container">

                    <!--start login form-->
                     <div class="col-sm-6">

                         <form>
                             <h3>Login</h3>

                             <div class="form-group">
                                 <label for="exampleInputEmail1">Username</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" >
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Password</label>
                                 <input type="password" class="form-control" id="exampleInputPassword1" >
                             </div>

                             <button type="submit" class="btn btn-red">Enter</button>
                         </form>
                     </div>
                    <!--end login form-->

                    <!--start register form-->
                     <div class="col-sm-6">
                         <form>
                             <h3>Register</h3>

                             <div class="form-group">
                                 <label for="exampleInputEmail1">First Name</label>
                                 <input type="text" class="form-control" id="examplejordan1utName2" >
                             </div>

                             <div class="form-group">
                                 <label for="exampleInputEmail1">Last Name</label>
                                 <input type="text" class="form-control" id="exampleInputName2" >
                             </div>

                             <div class="form-group">
                                 <label for="exampleInputEmail1">Password</label>
                                 <input type="password" class="form-control" id="exampleInputPassword1" >
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Confirm Password</label>
                                 <input type="password" class="form-control" id="exampleInputPassword1" >
                             </div>

                             <div class="form-group">
                                 <label for="exampleInputPassword1">Email</label>
                                 <input type="email" class="form-control" id="exampleInputEmail2" >
                             </div>

                             <button type="submit" class="btn btn-red">Enter</button> <button type="reset" class="btn btn-red">Reset</button>
                         </form>

                     </div>
                    <!--end registration form-->
                </div><!--end container-->
        </div>
    </div>
<?php include('footer.php');?>
</body>
</html>