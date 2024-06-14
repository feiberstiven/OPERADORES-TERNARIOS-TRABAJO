<?php

echo "¿Cuántos productos adquirió?\n";

$elnumero = readline();

$rebaja = ($elnumero >= 10) ? "\nvalor unitario - 10% (valor unitario)" : "valor unitario\n";

echo "La cantidad total a pagar" , $rebaja;

?>