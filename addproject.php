<?php

require_once 'connection/connection.php';


$message = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $project_name = $_POST['project_name'];
    $project_code = $_POST['project_code'];
    $project_cost = $_POST['project_cost'];

    // Validate input
    if (!empty($project_name) && !empty($project_code) && !empty($project_cost)) {
        // Prepare SQL query to insert data into projects table
        $sql = "INSERT INTO projects (project_name, project_code, project_cost) 
                VALUES ('$project_name', '$project_code', $project_cost)";

        if ($connection->query($sql) === TRUE) {
            $message = "Project added successfully!";
        } else {
            $message = "Error: " . $connection->error;
        }
    } else {
        $message = "fill in all fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url('img/background2.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .message {
            margin: 10px 0;
            text-align: center;
            color: green;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #4CAF50;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Add New Project</h1>
        <?php if ($message) { echo "<p class='message'>" . htmlspecialchars($message) . "</p>"; } ?>
        <form method="POST" action="">
            <label for="project_name">Project Name:</label>
            <input type="text" id="project_name" name="project_name" required>

            <label for="project_code">Project Code:</label>
            <input type="text" id="project_code" name="project_code" required>

            <label for="project_cost">Project Cost:</label>
            <input type="number" step="0.01" id="project_cost" name="project_cost" required>

            <button type="submit">Add Project</button>
        </form>
        <a href="project.php">Back to Project List</a>
    </div>
</body>
</html>
<?php
// Close the connection
$connection->close();
?>
