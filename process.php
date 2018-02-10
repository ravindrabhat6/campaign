
<?php include 'dbconnect.php';>
<?php

// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

//Execute the query

mysqli_query($connect"INSERT INTO customer(first_name,last_name,email)
				VALUES('$first_name','$last_name','$email')");
