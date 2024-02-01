<?php
$servername = "103.21.58.5";
$username = "akaal0f8";
$password = "Akaal@786";
$dbname = "hrmsc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

global $postapplied,$firstname,$lastname,$dob,$add,$phone,$email,$city,$state,$country,$minimumexperience,$skills,$education;
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['dob'])) {
    # code...
$postapplied = $_POST['postappliedfor'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$add = $_POST['address'];
$phone = $_POST['phonenumber'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$minimumexperience = $_POST['minimumexperience'];
$skills = $_POST['skills'];
$education = $_POST['education'];
$file= $_POST['fileToUpload'];
} else{
    echo "Empty";
}

$sql = "INSERT INTO `Recruitment`(`PostAppliedFor`, `FirstName`, `LastName`, `Dob`, `Address`, `PhoneNumber`, `EmailId`, `City`, `State`, `Country`, `MinimumExperience`, `Skills`, `CV`) 
                          VALUES ('$postapplied','$firstname','$lastname','$dob','$add','$phone','$email','$city','$state','$country','$minimumexperience','$skills','$file')";

if ($conn->query($sql) == TRUE) {
 echo "Success";
 header('Location:apply.php')
}
 else {
 echo $concheck;
}

$conn->close();
?>