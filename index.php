<?php
$insert = false;

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("Connection to this Database has been failed due to" .mysqli_connect_error());
}
// echo "Success connecting to Data base";

// $Name = $_POST['Name'];
// $Age = $_POST['Age'];
// $Gender = $_POST['Gender'];
// $Email = $_POST['Email'];
// $Phone = $_POST['Phone'];
// $Desc = $_POST['Desc'];
$name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

$sql = "INSERT INTO `trip`. `trip` (`Name`, `Age`, `Gender`, `Email Id`, `Contact No`, `Other`, 
`Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;
if($con->query($sql)==true){
    // echo "Succesfully inserted";
$insert = true;
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<img class="BG" src="BG.jpg" alt="Background Pic" srcset="">
<body>
    <div class="container">
        <br><h1>Welcome to Data Blink.inc</h1>
        <h3>Enter Your details & Submit this form to confirm your 
            participation to the US Trip.</h3><br>
        <form action="index.php" method="post">

<!-- <input type="text" name= "Name" id= "Name" placeholder= "Your Name">
<input type="text" name= "Age" id= "Age" placeholder="Your age">
<input type="text" name="Gender" id= "Gender" placeholder="Gender">
<input type="email" name="Email" id="Email" placeholder="Email Id">
<input type="phone" name="Phone" id="Phone" placeholder="Contact Number">
<textarea name="Desc" id="Desc" cols="30" rows="10"></textarea> -->
<input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
<br><button class="btn">Submit</button>
</form><br>
<?php
if($insert == true){
echo "<h4 class='submittxt'>Thanks You for Submiting the form. You are welcome to Join with us.</h4>";
}
?>
    </div>
    <script src="index.js"></script>
</body>
</html>

