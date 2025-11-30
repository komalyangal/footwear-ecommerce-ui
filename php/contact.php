<?php
$conn=mysqli_connect("localhost","root","","shoes_db");

if(!$conn)
{
    die("Connection Failed :".mysqli_connect_error());
}

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $msg=$_POST["msg"];

    $sql="INSERT INTO contact (name,email,phone,msg) VALUES ('$name','$email','$phone','$msg')";

    if(mysqli_query($conn , $sql))
    {
        echo "<script>
        alert('THANK YOU FOR YOUR MESSAGE!!');
        window.location.href = '../contact.html';
    </script>";
    }
    else{
        echo "PLEASE TRY AGAIN !! ";
    }

}

?>