<?php include "all_includes/db.php" ?>
<?php include "all_includes/header.php" ?>



    <!-- Navigation -->
    <?php include "all_includes/navigation.php" ?>
 

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->



            <div class="col-md-8">

<?php

   

    if(isset($_POST['submit']))
    {
        $search=$_POST['search'];

        $query3="select * from posts where post_tags like '%$search%'";
        $search_query=mysqli_query($connection,$query3);



        if(!$search_query)
        {
            die("QUERY FAILED".mysqli_error($connection));
        }

        $count=mysqli_num_rows($search_query);

        if($count==0)
        {
            echo "no result";
        }
        else
        {
            
while ($row=mysqli_fetch_assoc($search_query))
{
    $post_title=$row['post_title'];
    $post_author=$row['post_author'];
    $post_date=$row['post_date'];
    $post_image=$row['post_image'];
    $post_content=$row['post_content'];

?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"> <?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" 
                src="all_includes/images/<?php echo $post_image;?>" 
                 alt="image">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <!--
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>-->

                <hr>

                <!-- Third Blog Post -->
                <!--
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

            -->
            






<?php }

        }

    }

    ?>

































                <!-- Pager -->
                

            </div>



            <!-- Blog Sidebar Widgets Column -->
            <?php include "all_includes/sidebar.php" ?>


           
        </div>
        <!-- /.row -->

        <hr>

 <?php include "all_includes/footer.php" ?>

        