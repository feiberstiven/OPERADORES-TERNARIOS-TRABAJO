<?php
echo "¿Cuántas camisas quiere comprar?\n"

$elnumero = readline();

$rebaja = ($elnumero < 3) ? "\nEl descuento aplicado es del 10%" : "el descuento es del 20%\n";

echo $rebaja;

?>