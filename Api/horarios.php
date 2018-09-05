<?php
  function getHorario($horario){
    switch ($horario) {
      case '1':
        return "08:00 até 08:50";
        break;
      case '2':
        return "09:00 até 09:50";
        break;
      case '3':
        return "10:00 até 10:50";
        break;
      case '4':
        return "11:00 até 11:50";
        break;
      case '5':
        return "13:00 até 13:50";
        break;
      case '6':
        return "14:00 até 14:50";
        break;
      case '7':
        return "15:00 até 15:50";
        break;
      case '8':
        return "16:00 até 16:50";
        break;
      default:
        # code...
        break;
    }
  }
?>
