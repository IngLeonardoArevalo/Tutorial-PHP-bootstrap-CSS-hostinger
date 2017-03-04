<?php
$GLOBALS['servidor'] = 'localhost';
$GLOBALS['usuario'] = 'root';
$GLOBALS['clave'] = '';
$GLOBALS['BD'] = 'dsistemas';

function get_db_conn() {

$conn = mysqli_connect($GLOBALS['servidor'] , $GLOBALS['usuario'], $GLOBALS['clave'], $GLOBALS['BD']);

mysqli_select_db($conn, $GLOBALS['BD']);
        
if (!$conn) {
echo "No pudo conectarse a la BD: " . mysql_error();
exit;
}
return $conn;

}

?>