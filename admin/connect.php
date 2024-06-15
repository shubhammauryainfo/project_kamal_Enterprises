<?php
// Connect to the database
$conn = mysqli_connect("sql305.infinityfree.com", "if0_35966064", "poorpeople1", "if0_35966064_kamal");

// Check connection
if (!$conn) {
 echo"failed ".mysqli_connect_error($conn);
}

?>