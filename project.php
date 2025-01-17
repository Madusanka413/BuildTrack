<?php
require_once 'connection/connection.php';
$sql = "SELECT project_name, project_code, project_cost FROM projects";
$result = $connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Project List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/background2.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .container {
            width: 90%;
            margin: 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent background for the table */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .add-button {
            display: block;
            width: 150px;
            margin: 10px auto 20px;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            font-weight: bold;
        }
        .add-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Project List</h1>
    <div class="container">
        <a href="addproject.php" class="add-button">Add New Project</a>
        <table>
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Project Code</th>
                    <th>Project Cost</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['project_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['project_code']) . "</td>";
                        echo "<td>$" . number_format($row['project_cost'], 2) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No projects found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
// Close the connection
$connection->close();
?>
