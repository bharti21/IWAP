<?php
    $conn = mysqli_connect("localhost","root","","project");
    if(mysqli_connect_error())
    {
        echo mysqli_error();
    }
    if(isset($_POST['submit']))
    {
		$id=$_POST["id"];

	    $sql = "DELETE FROM customer1 WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . mysqli_error($conn);
		}
    }
    

mysqli_close($conn);
?>