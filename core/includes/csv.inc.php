<?php

// Read a CSV file, returning an array of rows
function read_csv($filename){
	$rows = array();

	//file() lee un fichero linea a linea y lo devuelve a un array
	foreach (file($filename, FILE_IGNORE_NEW_LINES) as $line) {
		// El separador por defecto es "," (no hace falta pornerlo si es el caso)
		// $rows[] = str_getcsv($line, ";");
		$rows[] = str_getcsv($line);
	}
	

	return $rows;
}

// Writes the given array of rows to a CSV file
function write_csv($filename, $rows){
	$file = fopen($filename, 'w');

	foreach ($rows as $row) {
		fputcsv($file, $row);
	}
}

?>