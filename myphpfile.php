<?php

$dow_hm = $_GET['dow_hm'];
$aula   = $_GET['aula'];

switch ($dow_hm) {
    case "lun0800":
        echo "lunes 08:00 Aula: $aula<br>ID materia: ";
        break;  
    case "lun0830":
        echo "lunes 08:30 Aula: $aula<br>ID materia: ";
        break;
    case "lun0900":
        echo "lunes 09:00 Aula: $aula<br>ID materia: ";
        break;
    case "lun0930":
        echo "lunes 09:30 Aula: $aula<br>ID materia: ";
        break;
    case "lun1000":
        echo "lunes 10:00 Aula: $aula<br>ID materia: ";
        break;


    case "mar0800":
        echo "martes 08:00 Aula: $aula<br>ID materia: ";
        break;  
    case "mar0830":
        echo "martes 08:30 Aula: $aula<br>ID materia: ";
        break;
    case "mar0900":
        echo "martes 09:00 Aula: $aula<br>ID materia: ";
        break;
    case "mar0930":
        echo "martes 09:30 Aula: $aula<br>ID materia: ";
        break;
    case "mar1000":
        echo "martes 10:00 Aula: $aula<br>ID materia: ";
        break;


        
    case "mie0800":
        echo "miercoles 08:00 Aula: $aula<br>ID materia: ";
        break;  
    case "mie0830":
        echo "miercoles 08:30 Aula: $aula<br>ID materia: ";
        break;
    case "mie0900":
        echo "miercoles 09:00 Aula: $aula<br>ID materia: ";
        break;
    case "mie0930":
        echo "miercoles 09:30 Aula: $aula<br>ID materia: ";
        break;
    case "mie1000":
        echo "miercoles 10:00 Aula: $aula<br>ID materia: ";
        break;

        
    case "jue0800":
        echo "jueves 08:00 Aula: $aula<br>ID materia: ";
        break;  
    case "jue0830":
        echo "jueves 08:30 Aula: $aula<br>ID materia: ";
        break;
    case "jue0900":
        echo "jueves 09:00 Aula: $aula<br>ID materia: ";
        break;
    case "jue0930":
        echo "jueves 09:30 Aula: $aula<br>ID materia: ";
        break;
    case "jue1000":
        echo "jueves 10:00 Aula: $aula<br>ID materia: ";
        break;

        
    case "vie0800":
        echo "viernes 08:00 Aula: $aula<br>ID materia: ";
        break;  
    case "vie0830":
        echo "viernes 08:30 Aula: $aula<br>ID materia: ";
        break;
    case "vie0900":
        echo "viernes 09:00 Aula: $aula<br>ID materia: ";
        break;
    case "vie0930":
        echo "viernes 09:30 Aula: $aula<br>ID materia: ";
        break;
    case "vie1000":
        echo "viernes 10:00 Aula: $aula<br>ID materia: ";
        break;


    default:
      echo "no asignado";
  }

//sleep(0.9);
echo rand(1000, 9999);
?>