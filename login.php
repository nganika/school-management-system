<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="">username</label>
        <input type="text" name="username" id="username">
        <label for="">password</label>
        <input type="text" name="password">
        <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
$conn=mysqli_connect(
    hostname: "localhost",username:"root",password:"",database: "sms");
    
    if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $quer=mysqli_query(mysql:$conn,query:"select * from the1 where
    username='$username' and password='$password'");
    $count=mysqli_num_rows(result: $quer);
    $rows=mysqli_fetch_array(result: $quer);
    if($count>0){
    session_start();
    $_SESSION['username']=$rows['username'];
    $_SESSION['password']=$rows['password'];
    echo"<script>alert('login successfully')</script>";
} else {
    echo"<script>alert('login failed')</script>";
}
    }