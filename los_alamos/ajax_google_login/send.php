<?php
$updatedData = $_POST['newData'];
// please validate the data you are expecting for security
file_put_contents('./users.json', $updatedData);

?>