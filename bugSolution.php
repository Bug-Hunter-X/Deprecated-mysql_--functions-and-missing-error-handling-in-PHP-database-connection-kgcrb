This improved code uses the `mysqli_*` functions, which are the recommended way to interact with MySQL databases in PHP.  It includes robust error handling to provide informative messages in case of connection or query failures.  It also demonstrates how to properly close the database connection.
```php
<?php
$mysqli = new mysqli('localhost', 'user', 'password', 'mydatabase');
if ($mysqli->connect_errno) {
die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
echo 'Connected successfully' . '\n';
$result = $mysqli->query('SELECT * FROM mytable');
if ($result) {
    while ($row = $result->fetch_assoc()) {
        print_r($row);
        echo '\n';
    }
    $result->free_result();
} else{
die('Query Error (' . $mysqli->errno . ') ' . $mysqli->error);
}
$mysqli->close();
?>
```