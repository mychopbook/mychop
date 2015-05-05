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
           <div class="col-sm-4 chop_item"><img src="images/beans.png" alt="top chop" class="img-circle">
               <h3>Kangarume</h3>
                   <p class="rating"></p>
                        <a>CookKing</a>
           </div>
           <div class="col-sm-4"><img src="images/beans.png" alt="top chop" class="img-circle">
               <h3>Kangarume</h3>
                    <p class="rating"></p>
                        <a>CookKing</a>
           </div>
           <div class="col-sm-4"><img src="images/beans.png" alt="top chop" class="img-circle">
            <h3>Kangarume</h3>
               <p class="rating"></p>
                    <a>CookKing</a>
           </div>
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