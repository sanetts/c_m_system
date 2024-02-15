<?php


include('../settings/core.php');
checkLogin(); 


$inProgressTasks = 15;
$completeTasks = 30;
$completedTasks = 50;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chore Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #2c3e50;
      color: #ecf0f1;
      text-align: center;
      padding: 1rem;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .status_container {
      display: flex;
      justify-content: space-around;
      margin-top: 30px;
    }

    .status_box {
      background-color: #3498db;
      padding: 20px;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .status_box:hover {
      background-color: #2980b9;
    }

    footer {
      background-color: #2c3e50;
      color: #ecf0f1;
      text-align: center;
      padding: 1rem;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    #add_chore_button {
      background-color: #005283;
      color: #fff;
      cursor: pointer;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      margin-bottom: 20px;
      display: block;
      margin: 0 auto;
    }

    #addChoreButton:hover {
      background-color: #1ba2f0;
    }
  </style>
</head>
<body>
  <header>
    <h1>Chore Management System</h1>
    <button id="logout_button">Logout</button>
  </header>

  <div class="container">
    <div class="status_container">
      <div class="status_box" onclick="redirectToChoreManagement('inProgress')">
        <h2>In Progress</h2>
        <p><?php echo $inProgressTasks; ?> tasks</p>
      </div>
      <div class="status_box" onclick="redirectToChoreManagement('complete')">
        <h2>Complete</h2>
        <p><?php echo $completeTasks; ?> tasks</p>
      </div>
      <div class="status_box" onclick="redirectToChoreManagement('completed')">
        <h2>Completed</h2>
        <p><?php echo $completedTasks; ?> tasks</p>
      </div>
    </div>
    <br />

    <a href="manage.html">
      <button id="add_chore_button">Manage Chores</button>
    </a>
  </div>

  <footer>
    <p>&copy; 2024 Chore Management System</p>
  </footer>

  <script>
     document.getElementById("logout_button").addEventListener("click", function() {
      window.location.href = "../login/logout_view.php";
    });
    function redirectToChoreManagement(status) {
      alert(`Redirecting to Chore Management for ${status} tasks`);
    }
  </script>
</body>
</html>
