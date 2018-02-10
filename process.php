
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
    echo "Thanks for subscribing. ".$genid."   is your referral code. you should be receving email with your Referral code and other information";
} else {
    echo "Error: info not stored";
}

$conn->close();

// Subject of confirmation email.
$conf_subject = 'Your recent enquiry';

// Who should the confirmation email be from?
$conf_sender = 'MyDept<noreply@mydomain.com>';

$msg = $_POST['first_name'] . ",\n\nWelcome to Telegram.You will be receving our newsletters on a weekly basis.
Below is your Referral code . please keep it safe.
\n\n Referfal code: ".$genid."\nPlease contact us if you have any questions";

mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender );


?>
