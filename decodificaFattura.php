<?php
define("PATH_XML_EXTRACT",'./');



function decodificaFattura($path){

	if(file_exists($path) && (strpos($path, ".p7m") !== false)){
		//openssl smime -verify -inform DER -in file.xml.p7m  -noverify -out file_finale
		$filename_output = time().".xml";

		$command = "openssl smime -verify -inform DER -in ".$path."  -noverify -out ".PATH_XML_EXTRACT.$filename_output;
		exec( $command, $output, $return_var );


		
		if(!empty($output)){ return $output; }
		if(!empty($return_var)){ return $retun_var;}
		
		return $filename_output;

	}else{ return -1;}

}

print_r( decodificaFattura('file.xml.p7m'));
 
