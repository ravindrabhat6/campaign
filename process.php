
<?php 
$server = "localhost";
$username = "root";
$password = "root";
$dbname = "userdata";


// Create connection
$conn = new mysqli($server, $username, $password, $dbname);


// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

// Generate Guid 
function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = substr($s,0,8); 
    return $guidText;
}
// End Generate Guid 

$genid = NewGuid();


//Execute the query


$sql = "INSERT INTO customer2(first_name,last_name,email,genid)
                                VALUES('$first_name','$last_name','$email','$genid')";


if ($conn->query($sql) === TRUE) {
    echo "Thanks for subscribing. ".$genid."   is your referral code. keep it safe";
} else {
    echo "Error: info not stored";
}

$conn->close();


?>
