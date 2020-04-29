<?php
include ('../adodb5/adodb.inc.php');
$DB = ADONewConnection('mysqli');
////$DB ->debug=true;
$DB ->Connect('localhost','root','','pruebas');
//$DB ->SetFetchMode(ADODB_FETCH_ASSOC);

$result = $DB->Execute('SELECT NombreEmpresa FROM usuarios');

 while (!$result->EOF) {
    for ($i=0, $max=$result->fieldCount(); $i < $max; $i++) {
       //print $result->fields[$i].' ';
       $Array[$i] =$result->fields[$i].' ';
    }
    $result->moveNext();

?>