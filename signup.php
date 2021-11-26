<?php


$signUpName = $_POST['userNameSignUp'];
$signUpPass = $_POST['userPassSignUp1'];



$userName = 'myuser';
$userPass = '123';
$dbName = 'webdev';
$conn = new mysqli('localhost', $userName, $userPass, $dbName);
if ($conn->connect_error) {
    die('eroare!' . $conn->error);
}

$hashedPass = password_hash($signUpPass, PASSWORD_DEFAULT);

$interogare = "INSERT INTO `users`(`userName`, `userPass`, `hashedPass`) VALUES ('$signUpName','$signUpPass','$hashedPass')";

$result = $conn->query($interogare);

if (!$result) {
    echo '<script>alert("User allready exists!")</script>';
    header("refresh:0.1; url=index.php");
} else {
    echo "<h2 style = color:green>User added ... redirect to your page!</h2>";
    header("refresh:2; url=indexAuth.php");
}
