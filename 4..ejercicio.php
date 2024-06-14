<?php

echo "Escriba la estacion\n";

$Ingresar = readline();

$temporada = "invierno";

$comunicado = ($Ingresar == $temporada) ? "Debe utilizar la siembra en almácigo" : "Se puede realizar la siembra directa";
echo $comunicado;




?>