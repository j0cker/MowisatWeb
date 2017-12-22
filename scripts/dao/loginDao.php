<?PHP

include ''.dirname(__FILE__).'/../utils/conexion.php';
include ''.dirname(__FILE__).'/../utils/functions.php';
include ''.dirname(__FILE__).'/../utils/log.php';

$username =  base_de_datos_scape($conn, $_GET["username"]);
$password =  base_de_datos_scape($conn, $_GET["ps"]);

$log = new LoggerPhp();
$log->write_log("[login]","Debug");

if($username!="" && $password!=""){

    $obj = new stdclass();
    $obj->success = "";
    $obj->description = "";

    $query = $conn->query("SELECT * FROM users WHERE user='".$username."' AND pass='".sha1($password)."'");
    if($query->num_rows>0){
            $obj->success = "true";
            $obj->description = "";
    } else {
            $obj->success = "false";
            $obj->description = "Error: usuario o contraseña erronea";
    }

} else {
    $obj->success = "false";
    $obj->description = "Error. you didnt complete all the contact form. Please complete it.";
}
echo json_encode($obj);

?>