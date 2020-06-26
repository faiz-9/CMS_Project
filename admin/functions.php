<?php

function insert_categories()
{
	global $connection;

  if(isset($_POST['submit']))
{
  $cat_title=$_POST['cat_title'];

if($cat_title==""|| empty($cat_title))
{
  echo "THIS FIELD SHOULD NOT BE EMPTY";
}
else
{
  $query="insert into categories (cat_title)";
  $query.="values('{$cat_title}')";

  $create_category_query=mysqli_query($connection,$query);

  if(!$create_category_query)
  {
    die("QUERY FAILED".mysqli_error($connection));
  }


}


}
	


}

function findAllcategories()
{
	global $connection;
	$query="select * from categories";
$select_categories=mysqli_query($connection,$query);



while($row=mysqli_fetch_assoc($select_categories))
{
$cat_id=$row['cat_id'];
$cat_title=$row['cat_title'];
echo "<tr>";
echo "<td>{$cat_id}</td>";
echo "<td>{$cat_title}</td>";
echo"<td><a href='categories.php?delete={$cat_id}'>DELETE</a></td>";
echo"<td><a href='categories.php?edit={$cat_id}'>EDIT</a></td>";
echo "</tr>";
}




}


function delete_categories()
//DELETE QUERY
{
	global $connection;
	if(isset($_GET['delete']))
{
    $the_cat_id=$_GET['delete'];

    $query= "delete from categories where cat_id = {$the_cat_id} ";

    $delete_query=mysqli_query($connection,$query);
    header("Location: categories.php");
}

}


















?>