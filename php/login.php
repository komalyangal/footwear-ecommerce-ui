<!-- <?php

$conn = mysqli_connect("localhost", "root", "", "shoes_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['inp1'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM signup_table WHERE name='$name' AND pass='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>
            alert('Login Successful!');
            window.location.href = '../home.html'; // After login, move to home page
        </script>";
    } else {
        echo "<script>
            alert('Invalid Email or Password!');
            window.location.href = '../login.html'; // Stay on login page
        </script>";
    }
}
?> -->
<?php
// Example login validation
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "1234"){
    echo "<script>alert('Login Successfully'); window.location.href='home.php';</script>";
} else {
    echo "<script>alert('Invalid Credentials'); window.location.href='login.html';</script>";
}
?>
