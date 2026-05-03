<?php 
function db_conn()
{
    $servername = "db.fr-pari1.bengt.wasmernet.com";
    $port = "10272";
    $username = "776c21e673208000a7a74e8d6507";
    $password = "069f776c-21e6-745b-8000-6a7a9090100f";
    $dbname = "my_database2401";

    try 
    {
        $dsn = "mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8";
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $conn;
    } 
    catch (PDOException $e) 
    {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}
?>
