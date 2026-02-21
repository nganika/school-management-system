<?php
$conn = mysqli_connect("localhost","root","","sms");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST['submit'])){

    $date = $_POST['date'];

    $sql = "INSERT INTO sessions(start_date) VALUES('$date')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Date saved successfully!";
    } else {
        echo "Error: ".mysqli_error($conn);
    }
}
?>