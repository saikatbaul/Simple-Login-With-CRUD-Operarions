<?php 
function db_conn()
{
    $servername = "localhost";
    $username = "776c21e673208000a7a74e8d6507";
    $password = "069f776c-21e6-745b-8000-6a7a9090100f";
    $dbname = "my_database2401";

    try 
    {
        $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    return $conn;
}
?>
