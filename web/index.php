  Hola Webhooks
<?php
  // Recuperar el cuerpo de la solicitud y analizarlo como JSON
  $input = file_get_contents("php://input");
  $event_json = json_decode($input);


  // Escribir en archivo
  $myfile = fopen("log/log-webhooks.json", "w") or die("Imposible abrir el archivo.");

  fwrite($myfile, $input);


?>
