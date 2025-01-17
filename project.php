<?php
// Database configuration
$host = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "your_database_name"; // Database name

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch project data
$sql = "SELECT project_name, project_code, project_cost FROM projects";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Project List</h1>
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
</body>
</html>
<?php
// Close the connection
$conn->close();
?>
