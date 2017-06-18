<?php

include("core/init.inc.php");
header('Content-Type: text/plain');


$listar=null;
$directorio = opendir("csv/");

while ( $elemento = readdir($directorio) ){
	// Si es directorio
	if (is_dir("csv/".$elemento)) {

	} else {
	// Si es un archivo
	//$listar .=<li><a href='cvs/$elemento'>$elemento</a></li>;
	print_r( read_csv('csv/'.$elemento) );
	}

}




//print_r(read_csv('csv/ejemplo.csv'));
//print_r(read_csv('csv/ejemplo_escritura.csv'));

/*$data = read_csv('csv/ejemplo.csv');
$data[] = array('kk0', 'kk1', 'kk2', 'kk3', 'kk4', 'kk5', 'kk6', 'kk7', 'kk8', 'kk9');
write_csv('csv/ejemplo_escritura.csv', $data);
*/
?>