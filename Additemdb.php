<?php
    $conn = mysqli_connect("localhost","root","","project");
    if(mysqli_connect_error())
    {
        echo mysqli_error();
    }
    if(isset($_POST['submit']))
    {
    	
        $breakfast= $_POST['breakfast'];
        $lunch = $_POST['lunch'];
        $dinner = $_POST['dinner'];
        
        $sql = "insert into menu (breakfast,lunch,dinner) values('$breakfast','$lunch','$dinner')";
        $data = mysqli_query($conn, $sql);
        if(!$data)
        {
            echo "<h4>menu not added!</h4>";
        }
        else
        {
            echo "<h4>menu added successfully</h4>";
        }
    }
?>

