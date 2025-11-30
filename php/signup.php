<?php
$conn = mysqli_connect("localhost", "root", "", "shoes_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['inp1'];
    $email = $_POST['inp3'];
    $password = $_POST['inp2'];

   
    $checkEmailQuery = "SELECT * FROM signup_table WHERE email = '$email'";
    $checkResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkResult) > 0) {
     
        echo "<script>
            alert('Email already registered!');
            window.location.href = '../login.html';
        </script>";
    } else {
       
        $sql = "INSERT INTO signup_table (name, email, pass) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('Registered Successfully!');
                window.location.href = '../login.html';
            </script>";
        } else {
            echo "<script>
                alert('Something went wrong. Please try again!');
                window.location.href = '../signup.html';
            </script>";
        }
    }
}
?>
