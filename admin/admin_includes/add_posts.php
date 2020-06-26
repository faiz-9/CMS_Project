<?php

if(isset($_POST['create_post']))
{
	$post_title=$_POST['title'];
	$post_author=$_POST['author'];
	$post_category_id=$_POST['post_category'];
	$post_status=$_POST['post_status'];

	$post_image = $_FILES['image']['name'];
	$post_image_temp=$_FILES['image']['tmp_name'];

	$post_tags=$_POST['post_tags'];
	$post_content=$_POST['post_content'];
	$post_date= date('d-m-y');
	//$post_comment_count=4;



	move_uploaded_file($post_image_temp,
		"admin_includes/move_uploaded_images/$post_image");


	$query="insert into posts (post_category_id,post_title,post_author,
	post_date,post_image,post_content,post_tags,post_status)";

	$query.="values({$post_category_id},'{$post_title}',
	'{$post_author}',now(),'{$post_image}','{$post_content}',
	'{$post_tags}', '{$post_status}')";

	$create_post_query=mysqli_query($connection,$query);

	$the_post_id = mysqli_insert_id($connection);

	echo "<p class ='bg-success'> Post Created . <a href = '../post.php?p_id={$the_post_id}'> View Post  </a> or
 <a href ='posts.php'> Edit More Posts </a> </p>";

}







?>


<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for ="title"> POST TITLE </label>
		<input type="text" name="title" class="form-control">
	</div>




<div class="form-group">

		<select name="post_category" id="">


<?php

 $query="select * from categories";
 $select_categories=mysqli_query($connection,$query);


while($row=mysqli_fetch_assoc($select_categories))
{
$cat_id=$row['cat_id'];
$cat_title=$row['cat_title'];

echo "<option value='{$cat_id}'> {$cat_title} </option>";
}







?>






</select>



	</div>




































	<div class="form-group">
		<label for ="title"> POST AUTHOR </label>
		<input  type="text" name="author" class="form-control">
	</div>











	<div class="form-group">
		

		<select name="post_status" id="">
          
          <option value="draft">Post Status</option>
          <option value="published">Published</option>
          <option value="draft">draft</option>

		</select>



		
	</div>

	<div class="form-group">
		<label for ="admin_image"> POST IMAGE </label>
		<input type="file" name="image">
	</div>

	<div class="form-group">
		<label for ="post_tags"> POST TAGS </label>
		<input type="text"
		 name="post_tags" class="form-control">
	</div>

	<div class="form-group">
		<label for ="admin_content"> POST CONTENT </label>
		<textarea class="form-control" name="post_content" 
		id="" 
		cols="30" rows="10" >
		
		</textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_post"
		value="PUBLISH POST">
		
	</div>
</form>