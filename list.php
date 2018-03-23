<?php
    $conn = mysqli_connect("localhost","root","","project");
    if(mysqli_connect_error())
    {
        echo mysqli_error();
    }
    $sql = "SELECT * FROM customer1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["lastname"]." Mobile_No  ".$row["mobileno"]." payment ".$row["payment"]." paymentDate  ".$row["paymentdate"]." category ".$row["category"] ." monthend ".$row["monthend"] ."<br>";
    }
	} else {
    echo "0 results";
	}

	mysqli_close($conn);

?>
