<?php

$userName = 'myuser';
$userPass = '123';
$dbName = 'webdev';

$conn = new mysqli('localhost', $userName, $userPass, $dbName);

if ($conn->connect_error) {
    die('eroare!' . $conn->error); // se oprește execuția scriptului
}


$interogare = "SELECT * FROM users";
$result = $conn->query($interogare);

$dataArray = $result->fetch_all(MYSQLI_ASSOC);

$userName = $_POST['userName'];
$userPass = $_POST['userPass'];

// autentificarea user-ului
$interogare = "SELECT * FROM users WHERE `userName` = '$userName' ";
$result = $conn->query($interogare);
$dataArray = $result->fetch_assoc();


$hash = $dataArray['hashedPass'];
if (password_verify($userPass, $hash)) {
    //echo "<h1 style='color:green'>Welcome <span style ='color:blue'>'$userName'</span>. You are logged in.";
    session_start();
    $_SESSION[$userName] = 'logged-in';
    header("Location: indexAuth.php");
} else {
    echo '<script>alert("Wrong username or password")</script>';
    header("refresh:1; url=index.php");
}
