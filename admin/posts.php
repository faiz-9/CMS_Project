<?php ob_start(); ?>
<?php include "admin_includes/header.php" ?>

    <div id="wrapper">








<!-- Navigation -->
<?php include "admin_includes/navigation.php" ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                         <h1 class="page-header">
                            Welcome to admin
                            <small> <?php  echo $_SESSION['username']; ?></small>
                        </h1>



    <?php

    if(isset($_GET['source']))
    {
        $source = $_GET['source'];
    }
    else
    {
      $source='';   
    }
    switch ($source)
    {
       case 'add_posts':
       include "admin_includes/add_posts.php";
       break;

        case 'edit_post':
       include "admin_includes/edit_post.php";
       break;

        case '200':
       echo "NICE 200";
       break;

       default:
       include "admin_includes/view_all_posts.php";
       break;
    }





    ?>































                      



                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

      </div> 






        <!-- /#page-wrapper -->
        <?php include "admin_includes/footer.php" ?>

    