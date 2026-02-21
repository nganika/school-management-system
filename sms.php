<?php
$conn = mysqli_connect("localhost","root","","sms");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = $_POST['class_trade'];
    $reason = $_POST['reason'];

    $sql = "INSERT INTO the1 VALUES (name,gender,class_trade,reason)
            VALUES('$name','$gender','$class','$reason')";

}
?>
<!DOCTYPE html>
<html>
<head>
<title>School Management System</title>
<style>
body{
  margin:0;
  font-family:Arial;
  background:#f4f6f8;
}
header{
  background:#2c5612;
  color:white;
  padding:15px;
  text-align:center;
  font-size:22px;
}
nav{
  width:200px;
  background:#023e8a;
  color:white;
  height:100vh;
  float:left;
}
nav ul{list-style:none;padding:0;}
nav ul li{
  padding:15px;
  border-bottom:1px solid #0466c8;
}
nav ul li:hover{
  background:#0096c7;
  cursor:pointer;
}
main{
  margin-left:200px;
  padding:20px;
}
table{
  width:100%;
  border-collapse:collapse;
  margin-top:15px;
  background:white;
}
table,th,td{
  border:1px solid #ddd;
}
th,td{
  padding:10px;
}
th{
  background:#0077b6;
  color:white;
}
.form-section{
  margin-top:20px;
  background:white;
  padding:15px;
  border-radius:5px;
  box-shadow:0 2px 4px rgba(0,0,0,0.1);
}
input,button{
  padding:8px;
  margin:5px;
  width:95%;
}
button{
  background:#0077b6;
  color:white;
  border:none;
}
button:hover{
  background:#023e8a;
}
.action-btn{
  color:red;
  text-decoration:none;
}
</style>
</head>
<body>

<header><img src="rtb.png" style="width:100px;height:100px;  border-top-left-radius: 40px;
      border-top-right-radius: 40px;">School Management System</header>

<nav>
<ul>
<li onclick="showSection('dashboard')">DATES</li>
<li onclick="showSection('students')">STUDENTS</li>
</ul>
</nav>

<main>


<section id="dashboard">
  <h2>DATE</h2>
  <p>WELCOME TO SMS ACADEMY 🏫</p>

  <form action="save_date.php" method="POST">
      <label>Insert date you start session:</label>
      <input type="date" name="date" required>
      <input type="submit" name="submit" value="Add Date">
  </form>
</section>
  


<section id="students" style="display:none;">
<h2>Students</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Gender</th>
<th>Class</th>
<th>Reason</th>
<th>Action</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM the1");
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['class_trade']; ?></td>
<td><?php echo $row['reason']; ?></td>
<td>
<a class="action-btn" href="?delete=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>
<?php } ?>
</table>

<div class="form-section">
    <form method="POST">
<h3>Add New Student</h3>
<form method="POST">
<input type="text" name="name" placeholder="Student Name" required>
<input type="text" name="gender" placeholder="Gender" required>
<input type="text" name="class_trade" placeholder="Class/Trade" required>
<input type="text" name="reason" placeholder="Reason" required>
<button type="submit" name="add">Add Student</button>
</form>
</div>

</section>

</main>

<script>
function showSection(id){
  document.getElementById('dashboard').style.display='none';
  document.getElementById('students').style.display='none';
  document.getElementById(id).style.display='block';
}
</script>

</body>
</html>