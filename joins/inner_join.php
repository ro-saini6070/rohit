 <?php
 echo 'this is sdecdsfsdfsdfsdfsdffd';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joins";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT e.first_name, e.last_name, u.user_type, u.username FROM `employee` AS e INNER JOIN `user` AS u ON e.id = u.employee_id WHERE e.salary >= 6000 AND u.user_type = 'NORMAL';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>first_name</th><th>last_name</th><th>user_type</th><th>username</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td> ".$row["user_type"]."</td><td>".$row["username"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 