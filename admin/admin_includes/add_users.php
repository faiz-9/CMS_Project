<?php

if(isset($_POST['create_user']))
{
	//$user_id=$_POST['user_id'];
	$user_firstname=$_POST['user_firstname'];
	$user_lastname=$_POST['user_lastname'];
	$user_role=$_POST['user_role'];

	// $post_image = $_FILES['image']['name'];
	// $post_image_temp=$_FILES['image']['tmp_name'];

	$username=$_POST['username'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
	//$post_date= date('d-m-y');
	//$post_comment_count=4;



	//move_uploaded_file($post_image_temp,
		//"admin_includes/move_uploaded_images/$post_image");


	$query="insert into users (user_firstname,user_lastname,
	user_role,username,user_email,user_password)";

	$query.="values('{$user_firstname}',
	'{$user_lastname}','{$user_role}','{$username}',
	'{$user_email}', '{$user_password}')";

	$create_user_query=mysqli_query($connection,$query);

	echo " User created: " . "" . 
	 "<a href = 'users.php'>View Users </a>";

}




?>


<form action="" method="post" enctype="multipart/form-data">



	<div class="form-group">
		<label for ="title"> FirstName </label>
		<input  type="text" name="user_firstname" class="form-control">
	</div>


	<div class="form-group">
		<label for ="post_status"> LastName </label>
		<input type="text" name="user_lastname" class="form-control">
	</div>






	<!--<div class="form-group">
		<label for ="title"> POST TITLE </label>
		<input type="text" name="title" class="form-control">
	</div>-->


<div class="form-group">

	<select name = "user_role" id = "">

		<option value="subscriber">Select Options</option>
		<option value="admin">Admin</option>
		<option value="subscriber">Subscriber</option>





	</select>


</div>




































	
	<!--<div class="form-group">
		<label for ="admin_image"> POST IMAGE </label>
		<input type="file" name="image">
	</div>-->


	<div class="form-group">
		<label for ="post_tags"> Username </label>
		<input type="text"
		 name="username" class="form-control">
	</div>

	<div class="form-group">
		<label for ="admin_content"> Email </label>
		<input type="email"
		 name="user_email" class="form-control">
	</div>


	<div class="form-group">
		<label for ="admin_content"> Password </label>
		<input type="password"
		 name="user_password" class="form-control">
	</div>







	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_user"
		value="ADD USER">
		
	</div>
</form>