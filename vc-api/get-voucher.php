<?PHP

header("Content-Type: text/html;charset=utf-8");

include ''.dirname(__FILE__).'/../scripts/utils/conexion.php';
include ''.dirname(__FILE__).'/../scripts/utils/functions.php';
include ''.dirname(__FILE__).'/../scripts/utils/log.php';

mysqli_set_charset($conn,"utf8");

$log = new LoggerPhp();
$log->write_log("[Get-location]","Debug");


if(!empty($_GET["option"])){
    $option = $_GET["option"];
} else {
    $option = "";
}
if(!empty($_GET["location"])){
    $location = $_GET["location"];
} else {
    $location = "";
}
if(!empty($_GET["macAddress"])){
    $macAddress = $_GET["macAddress"];
} else {
    $macAddress = "";
}


$obj = new stdclass();
$obj->success = "true";
$obj->description = "";
$obj->voucher = "";
$obj->error = 0;

if(empty($option) || empty($location)){
    //parametros vacíos
    $obj->success = "false";
    $obj->description = "Parámetros Inválidos";
    $obj->error = 4;
} else {

    //Busca MacAddress Repetidas
    //Método de Exchange between Piggi Download and Free Internet
    if($option==1){

        //busca MACAddress
        $query = $conn->query("SELECT * FROM macaddressapi WHERE address='".$macAddress."'") OR die(mysqli_error($conn));
        if($query->num_rows>0){
            
            //rechaza la entrega de voucher
            $obj->success = "false";
            $obj->description = "Éste usuario ya ha descargado previamente la aplicación piggi.";
            $obj->error = 2;
                

        } else {

            //busca un Voucher
            $query = $conn->query("SELECT * FROM vouchersapi WHERE location_id='".$location."' ORDER BY id ASC") OR die(mysqli_error($conn));
            if($query->num_rows>0){

                $row=$query->fetch_assoc();

                $obj->voucher = $row["voucher"];

                //almacena MacAddress en Base

                $insert = $conn->query("INSERT INTO macaddressapi (address) VALUES ('".$macAddress."')") OR die(mysqli_error($conn));
                if($insert!=1){

                    $obj->success = "false";
                    $obj->description = "Error Contacte al administrador";
                    $obj->error = 1;

                }

                //falta eliminar voucher

            } else {
                
                //no hay vouchers disponibles
                $obj->success = "false";
                $obj->description = "No hay vouchers disponibles";
                $obj->error = 3;
            }

        }

    } else {

        //NO Busca MacAddress Repetidas
        //Método de Exchange between piggi coins and Free Internet
        //busca un VOucher
        $query = $conn->query("SELECT * FROM vouchersapi WHERE location_id='".$location."' ORDER BY id ASC") OR die(mysqli_error($conn));
        if($query->num_rows>0){

            $row=$query->fetch_assoc();

            $obj->voucher = $row["voucher"];

            //falta eliminar voucher

        } else {
            
            //no hay vouchers disponibles
            $obj->success = "false";
            $obj->description = "No hay vouchers disponibles";
            $obj->error = 3;
        }
    }
}

echo json_encode($obj);

?>