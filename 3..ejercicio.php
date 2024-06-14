<?php

 echo"Las medidas del terreno\n";

 $medida1 = readline();
 

 $medida2 = readline();

  
 $lote = (($medida1 >= 1000) && ($medida2 >= 1000)) ? "\nEs apto para cultivos extensivos" : "Es propicio para el cultivo de jardín o huerto\n";
 
 echo $lote;

 ?>