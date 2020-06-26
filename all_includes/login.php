<?php include "db.php"; ?>
<?php session_start(); ?>

<?php

if(isset($_POST['login']))
{
	 $username= $_POST['username'];
	 $password = $_POST['password'];

	 $username2 = mysqli_real_escape_string($connection,$username);
	 $password2 = mysqli_real_escape_string($connection,$password);


	 $query="select * from users where username = '{$username2}' ";

	 $select_user_query = mysqli_query($connection,$query);

}

while($row=mysqli_fetch_assoc($select_user_query))
{ 
    $db_user_id = $row['user_id'];
    $db_username = $row['username'];
    $db_user_password = $row['user_password'];
    $db_user_firstname = $row['user_firstname'];
    $db_user_lastname = $row['user_lastname'];
    $db_user_role = $row['user_role'];

}


$password2 = crypt($password, $db_user_password); 




if($username2 !== $db_username && $password2 !==  $db_user_password)
{
	header("Location: ../index.php");

}
else if ($username2 == $db_username && $password2 ==  $db_user_password)
{

   $_SESSION['username'] = $db_username;
   $_SESSION['firstname'] = $db_user_firstname;
   $_SESSION['lastname'] = $db_user_lastname;
   $_SESSION['user_role'] = $db_user_role;


   header("Location:../admin");


}
else
{
	header("Location: ../index.php");
}









?>