<?php
//importando model
require_once("../modelos/model.php");
$model = new Model();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$sql = "SELECT * FROM moto";
$result = $model->consulta($sql);

$motos=array();
$motos["motos"]=array();
 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id_moto"]. " - Name: " . $row["nombre_moto"]. " " . $row["valor_moto"]. "<br>";

    $arr = array('id_moto' => $row["id_moto"], 'nombre_moto' => $row["nombre_moto"],'valor_moto'=> $row["valor_moto"]);

     array_push($motos["motos"],$arr);
  }
http_response_code(200);
  echo json_encode($motos["motos"]);
} else {
  $mensajeErrorJson = array('mensaje'=>'error mi hermano');

  echo json_encode($mensajeErrorJson);
   http_response_code(404);
}
$model->cerrar();
 ?>