<!DOCTYPE html>
<html>
<body>

<?php
// Generate Guid 
function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = substr($s,0,8); 
    return $guidText;
}
// End Generate Guid 

$Guid = NewGuid();
echo $Guid;
echo "<br>";

?>

</body>
</html>
