<?php

$_POST['valor1'];


$val1=$_POST['valor1'];;
$val2=$_POST['valor2'];;
$op=$val1+$val2;


$wsdl ='http://localhost:8080/iva/iva?WSDL';

$params=array(
	'calculo'=>$op
);


$soap = new SoapClient($wsdl);
$data =$soap->calcularIva($params);


echo "el valor de la suma es:".$op." el valor de la suma mas el iva del 19% es: ".$data->return;

?>
