<?php
    session_start();
    require "dbconfig.php";
?>	

<?php
switch("Cotton")
{
	case "Cotton":$codid=1227;
	break;
    case "Fabric":$codid=1228;
	break;
	case "Denim":$codid=1229;
	break;
	case "Nylon":$codid=1230;
	break;
   case "Velvet":$codid=1231;
	break;
	case "Silk":$codid=1232;
	break;
    case "Wool":$codid=1233;
	break;
	case "Leather":$codid=1234;
	break;
    case "Linen":$codid=1235;
	break;
    default:
	echo "mtrorder is only wrong";
}
	echo "codid is ".$codid."<br>"; 
?>