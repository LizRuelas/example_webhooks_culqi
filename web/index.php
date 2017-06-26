<?php
  // Retrieve the request's body and parse it as JSON
  $input = @file_get_contents("php://input");
  $event_json = json_decode($input);

  // Do something with $event_json




  // Escribir en archivo
  $myfile = fopen("log/log-webhooks.txt", "w") or die("Imposible abrir el archivo.");


  fwrite($myfile, $input);
  fclose($myfile);


  // Respuesta a Culqi, todo bien.
  http_response_code(200); // PHP 5.4 o superior
?>
