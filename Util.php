<?php 
class Util{	
//PEGA UM ARQUIVO CSV E TRANSFORMA EM JSON
	public static function csvFileToJson($filename){
		$filename = "usuarios.csv";	

		if (file_exists($filename)) {
			$file = fopen($filename, "r");
			$headers = explode(",", fgets($file));

			$data =  array();
			while ($row = fgets($file)) {
				$rowData = explode(",", $row);
				$linha = array();
				for ($i=0; $i < count($headers); $i++) { 
					$linha[$headers[$i]] = $rowData[$i];
				}
				array_push($data, $linha);
			}
			fclose($file);
			return json_encode($data);
		}
	}
}
?>}
