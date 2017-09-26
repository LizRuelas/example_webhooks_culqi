<?php
  // Recuperar el cuerpo de la solicitud y analizarlo como JSON
  $input = file_get_contents("php://input");
  $event_json = json_decode($input);


  // Escribir el Webhook en mi archivo
  $myfile = fopen("log/log-webhooks.json", "w") or die("Imposible abrir el archivo.");
  fwrite($myfile, $input);

  //Respuesta a Culqi
  $array = array(
    "mensaje_response" => "Objeto token recibido"
  );
  echo json_encode($array);
?>
