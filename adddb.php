<?php
    $conn = mysqli_connect("localhost","root","","project");
    if(mysqli_connect_error())
    {
        echo mysqli_error();
    }
    if(isset($_POST['submit']))
    {
    	$id =$_POST['id'];
        $name = $_POST['name'];
        if(isset($_POST['lname']))
        $lastname = $_POST['lname'];
        else
            echo "cdnck";
        $mob = $_POST['mob'];
        $payA =($_POST['PaymentAmount']);
        $payD = ($_POST['PaymentDate']);
        
        $cat=($_POST['category']);
        $monthend='2';
       // echo $lastname;
        //echo $mob;
       // echo var_dump($_POST);
        $sql = "insert into customer1 (id,name,lastname,mobileno,payment,paymentdate,category,monthend) values('$id','$name','$lastname','$mob','$payA','$payD','$cat','$monthend')";
        $data = mysqli_query($conn, $sql);
        if(!$data)
        {
            echo "<h4>customer not added!</h4>";
        }
        else
        {
            echo "<h4>customer added successfully</h4>";
        }
    }
?>

