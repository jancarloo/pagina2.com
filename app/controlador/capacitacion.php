<?php
$gt = $_GET;
$url = strtolower($gt['peticion']); // quitar espacios trim() y minusculas strolower()
//$url = preg_replace("/^[0-9a-zA-Z]+$/","",$url); // quitar caracteres no aceptados mas los que esten en la expreción regular
$pet = explode('/', $url); // separa instrucciones para el blog
$url = trim($pet[0]); // url de registro en base de datos
$url = ($url!='')?$url:'cursos'; // pagina inicial
//$out = $jmyWeb->cargar(["pagina"=>$url]);
//$jmyWeb ->pre(['p'=>$url,'t'=>'URL']);
$out = $print[ot]['inicio'];
$out['pagina'] =  $url;

if($pet[1]!=''){
	
	//$jmyWeb ->pre(['p'=>$pet[1],'t'=>'URL']);
	$url = 'cursos-'.$pet[1];
	$out = $jmyWeb->cargar(["pagina"=>$url]);
	$jmyWeb ->cargar_vista(["url"=>"cursos-detalle.php","data"=>["pagina"=>$url]]);
}else{
	$out = $jmyWeb->cargar(["pagina"=>$url]);
	$jmyWeb ->cargar_vista(["url"=>"instituto.php","data"=>$out]);
}


?>