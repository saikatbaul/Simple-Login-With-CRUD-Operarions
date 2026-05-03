<?php
define('DB_SERVER', 'db.fr-pari1.bengt.wasmernet.com');
define('DB_USERNAME', '776c21e673208000a7a74e8d6507');
define('DB_PASSWORD', '069f776c-21e6-745b-8000-6a7a9090100f');
define('DB_NAME', 'my_database2401');
define('DB_PORT', 10272);

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if($conn === false){
    die("ERROR: Could not connect (Error #" . mysqli_connect_errno() . "). " . mysqli_connect_error());
}
?>
