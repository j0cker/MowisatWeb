<?PHP

header("Content-Type: text/html;charset=utf-8");

include ''.dirname(__FILE__).'/../scripts/utils/conexion.php';
include ''.dirname(__FILE__).'/../scripts/utils/functions.php';
include ''.dirname(__FILE__).'/../scripts/utils/log.php';

mysqli_set_charset($conn,"utf8");

$log = new LoggerPhp();
$log->write_log("[Get-location]","Debug");

$obj = new stdclass();
$obj->success = "true";
$obj->description = "";
$obj->error = 0;

$obj->locations = array();

$query = $conn->query("SELECT * FROM locationsapi") OR die(mysqli_error($conn));
if($query->num_rows>0){

    $c=0;

    while($row=$query->fetch_assoc()){

        $obj->locations[] = new stdclass();
     
        $obj->locations[$c]->id = $row["id"];
        $obj->locations[$c]->name = $row["name"];

        $c++;
    }

} else {
    
    $obj->success = "false";
    $obj->description = "Error Contacte al administrador";
    $obj->error = 1;
}

echo json_encode($obj);

?>