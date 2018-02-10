
<?php 
$server = "localhost";
$username = "root";
$password = "Ondadake361";
$dbname = "userdata";


// Create connection
$conn = new mysqli($server, $username, $password, $dbname);


// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

//Execute the query


$sql = "INSERT INTO customer(first_name,last_name,email)
                                VALUES('$first_name','$last_name','$email')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: info not stored";
}

$conn->close();


?>
