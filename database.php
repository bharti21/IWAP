
	

<?php
    $conn = mysqli_connect("localhost","root","","project");
    if(mysqli_connect_error())
    {
        echo mysqli_error();
    }
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = sha1($_POST['password']);
        $sql = "insert into Admin (name,lastname,email,password) values('$name','$lastname','$email','$pass')";
        $data = mysqli_query($conn, $sql);
        if(!$data)
        {
            echo "<h4>login failed!</h4>";
        }
        else
        {
            echo "<h4>user registered successfully</h4>";
        }
    }
?>

