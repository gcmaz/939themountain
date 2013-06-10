<?php
//VALIDATE/CLEAN INPUT
function clean($string,$type){
switch ($type){
    case "int":
        return filter_var(filter_var($string, FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT);
	case "float":
		return filter_var(FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    case "string":
        return filter_var($string, FILTER_SANITIZE_STRING);
    case "sql":
        return mysql_real_escape_string($string);
        break;
    case "email":
        return filter_var(filter_var($string, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
        break;
    case "url":
        return filter_var(filter_var($string, FILTER_VALIDATE_URL), FILTER_SANITIZE_URL);
        break;
    case "ip":
        return filter_var(filter_var($string, FILTER_SANITIZE_IP), FILTER_VALIDATE_IP);
        break;
    case "boolean":
        return filter_var($string, FILTER_VALIDATE_BOOLEAN);
        break;
    default:
        return 0;
        break;
    }
}
?>