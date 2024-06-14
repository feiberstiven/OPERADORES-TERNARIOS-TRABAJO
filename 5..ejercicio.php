<?php

echo "indique su edad\n";

$años = readline();

$condicion = ($años >= 18) ? (readline("¿Dispone de licencia?\n ") == "si" ? " autorizado para conducir" : "No tiene permiso para conducir") : "No tiene la edad suficiente";

echo $condicion;

?>