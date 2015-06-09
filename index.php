<?php include('header.php');?>
    <div class="">

            <div class="hero">
                <div class="container_fluid hero-content">
                    <form action="search.php">
                        <input type="text" class="form-control herosearchinput" placeholder="Search..."><input type="submit" value="Search" class="btn herosearchbtn btn-orange">
                        <button class="btn  btn-create" type="submit">Create Recipe</button>
                    </form>
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

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //sort a-z
                $query = "  SELECT r.name, u.username,r.picture
                            FROM recipe r, user u
                            WHERE r.user_iduser = u.iduser
                            ORDER BY r.datecreated DESC
                            LIMIT 0,3";
                $result = mysqli_query($con,$query);

                //Associative array

                while ($row=mysqli_fetch_assoc($result)){
                    echo '<div class="col-sm-4 chop_item">';
                    echo '<img src="'.$row['picture'].'" alt="top chop" class="img-circle img-responsive">';
                    echo '<h3>' .$row['name'] .'</h3>';
                    echo '<p class="rating"></p>';
                    echo '<a>'.$row['username'].'</a>';
                    echo '</div>';
                }

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