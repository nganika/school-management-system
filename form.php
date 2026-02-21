<?php


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Business Management System</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f6f8;
    }

    header {
      background: #2c5612;
      color: white;
      padding: 15px 20px;
      text-align: center;
      font-size: 22px;
    }

    nav {
      width: 200px;
      background: #023e8a;
      color: white;
      height: 100vh;
      float: left;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
    }

    nav ul li {
      padding: 15px;
      border-bottom: 1px solid #0466c8;
    }

    nav ul li:hover {
      background: #0096c7;
      cursor: pointer;
    }

    main {
      margin-left: 200px;
      padding: 20px;
    }

    h2 {
      color: #023e8a;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background: #0077b6;
      color: white;
    }

    .form-section {
      margin-top: 30px;
      background: white;
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    input, select, button {
      padding: 8px;
      margin: 5px;
      width: calc(100% - 20px);
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background: #0077b6;
      color: white;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background: #023e8a;
    }
    .skum h1 img{
      height: 2em;
      width: 2em;
      border-top-left-radius: 40px;
      border-top-right-radius: 40px;
      margin-right: 49em;
      margin-top: -12em;
      border-bottom-right-radius: 40px;
    }
  </style>
</head>
<body>

  <header> 
    <div class="skum">
      <h1><img src="SYSTEM KUZWA MANAGENT.png" alt="" ></h1>
    </div>
    school Management System
  </header>

  <nav>
    <ul>
      <li onclick="showSection('dashboard')">DATES</li>
      <li onclick="showSection('employees')">STUDENT FIELD</li>
      <li onclick="showSection('inventory')">PETRON&METRON</li>
      <li onclick="showSection('sales')">DETAIL OF  PERMITION</li>
      <li onclick="showSection('settings')">SETTINGS</li>
    </ul>
  </nav>

  <main>
    <section id="dashboard">
      <h2>DATE</h2>
      <p>Welcome from SkuM🏫</p>
      <label for="">insert date</label>
      <input type="date" name="date" >
      <input type="submit" name="submit" value="add date  ">
    </section>

    <section id="employees" style="display:none;">
      <h2>STUDENTS</h2>
      <table>
        <tr><th>ID</th><th>Name</th><th>gender</th><th>class/trade</th><th>reason</th></tr>
        <tr><td>1</td><td>Jane Doe</td><td>male</td><td>l4soda</td><td>go on hospital</td></tr>
        <tr><td>2</td><td>John Smith</td><td>male</td><td>s2a</td><td>familly issues</td></tr>
      </table>

      <div class="form-section">
        <h3>Add New student</h3>
        <form id="employeeForm">
          <input type="text" placeholder="student name" required />
          <input type="text" placeholder="gender" required />
          <input type="text" placeholder="class/trade" required />
          <input type="text" placeholder="reason" required />
          <button type="submit">Add student</button>
        </form>
      </div>
  

    <section id="sales" style="display:none;">
      <h2>Sales</h2>
      <p>Track daily and monthly sales here.</p>
    </section>

    <section id="settings" style="display:none;">
      <h2>Settings</h2>
      <p>Manage user accounts, access levels, and system preferences.</p>
    </section>
  </main>

  <script>
    function showSection(sectionId) {
      const sections = document.querySelectorAll('main section');
      sections.forEach(sec => sec.style.display = 'none');
      document.getElementById(sectionId).style.display = 'block';
    }

    document.getElementById('employeeForm').addEventListener('submit', function(event) {
      event.preventDefault();
      alert('New employee added successfully!');
    });
  </script>
</body>
</html>



?>
