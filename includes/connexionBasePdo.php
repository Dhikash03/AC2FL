<?php
$host='localhost';
$bd='ACF2L';
$login='admin';
$password='sio';
try
{
$pdo = new PDO('mysql:host='.$host.';dbname='.$bd, $login, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (Exception $e) //Le catch est chargé d’intercepter une éventuelle erreur
{
die ($e->getMessage());
}
global $pdo;

switch($typeDb)
{
case 'mysql':
mysql_query($query);
break;
case 'sqlite':
sqlite_query($query);
break;
case 'mssql':
mssql_query($query);
break;
//etc...
}

?>