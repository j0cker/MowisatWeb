<?PHP

include ''.dirname(__FILE__).'/../utils/conexionBlog.php';
include ''.dirname(__FILE__).'/../utils/functions.php';

$obj = new stdclass();
$obj->success = "";
$obj->description = "";
//base_de_datos_utf_8($conn);
$query = $conn->query("select post_content, post_title, guid from wp_posts WHERE post_type='post' ORDER BY ID DESC LIMIT 1") OR DIE(mysqli_error($conn));
if($query->num_rows>0){
    $row=$query->fetch_assoc();
    $obj->success = "true";
    $obj->title = htmlspecialchars(utf8_encode($row["post_title"]));
    $obj->content = limpiartextoDeHtml(utf8_decode($row["post_content"]),300); 
    $obj->guid = $row["guid"];
    $obj->description = "";
} else {
    $obj->success = "false";
    $obj->description = "Error. Contact the administrator";
}
echo json_encode($obj);

?>