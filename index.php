<?php
$conn = mysqli_connect("localhost","root","","sms");
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

/* DELETE */
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    mysqli_query($conn,"DELETE FROM the1 WHERE id=$id");
}

/* INSERT */
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = $_POST['class_trade'];
    $reason = $_POST['reason'];

    mysqli_query($conn,"INSERT INTO the1 (name,gender,class_trade,reason)
    VALUES('$name','$gender','$class','$reason')");
}
?>