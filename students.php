<?php
$conn = mysqli_connect("localhost","root","","sms");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

<?php
// ADD STUDENT
if (isset($_POST['add'])) {

    $name   = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $class  = mysqli_real_escape_string($conn, $_POST['class_trade']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);

    $sql = "INSERT INTO the1 (name, gender, class_trade, reason) 
            VALUES ('$name', '$gender', '$class', '$reason')";

    if (mysqli_query($conn, $sql)) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


// DELETE STUDENT
if (isset($_GET['delete'])) {

    $id = intval($_GET['delete']); // secure number

    $sql = "DELETE FROM the1 WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Student deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<section id="students">

<h2>Students</h2>

<table border="1" cellpadding="8">
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
<a href="?delete=<?php echo $row['id']; ?>" 
onclick="return confirm('Delete this student?')">
Delete
</a>
</td>
</tr>
<?php } ?>
</table>

<div class="form-section">
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