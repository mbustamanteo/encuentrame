<?php

function obtenerNino(){
	$arr = array();
	$arr["nombre"] = "Mauricio";
	$arr["pais"] = "Chile";
	$arr["img"] = "img/pngs/yanira_alexandra_valenzuela_villa.png";

	return $arr;
}

function getBanner($pais, $ancho, $alto){
	$nino = obtenerNino();

	$html = "<html><head><script type=\"text/javascript\">function a(){window.parent.location.replace(\"http://bustamanteortega.com/encuentrame/sitio/\");return false;}</script> </head><body>";
	
	$html .= "<div>";
	$html .= "<a href=\"#\" onclick=\"a();\" ><img src=\"img.png\" alt=\"\" /> </a>";
	$html .= "</div>";
	
	$html .= "</body></html>";
	
	print $html;
}


function getBannerDatos($pais, $ancho, $alto , $nino){
	
	$arr["nombre"] = $nino["nombre"];
	$arr["pais"] = $nino["pais"];
	$arr["img"] = $nino["img"];
	$arr["banner"] = "";
	
	
	$nombre_archivo = 'banner/'. $pais .'-' . $nino["nombre"] .  '-'. $alto .'x' . $ancho . '.png';
	$exists = file_exists($nombre_archivo);
	if(!$exists) {
		generarImg($alto, $ancho, 'yanira_alexandra_valenzuela_villa', $pais);
	}
	
	$arr["banner"] = $nombre_archivo;
	$arr["url"] = "http://127.0.0.1/" . $arr["nombre"];
	
	return $arr;
	
}


function generarImg($altoRequerido, $anchoRequerido, $nombreImg , $pais){
	
		// El archivo
	$nombre_archivo = 'img/ninos/' . $nombreImg .'.png';
	$porcentaje = 1.2;
	
		// Tipo de contenido
	//header('Content-Type: image/png');
	
		// Obtener nuevas dimensiones
	list($ancho, $alto) = getimagesize($nombre_archivo);
	$nuevo_ancho = $ancho * $porcentaje;
	$nuevo_alto = $alto * $porcentaje;
	
		// Redimensionar
	$imagen_p = ImageCreateTrueColor($altoRequerido, $anchoRequerido);
	$imagen_logo = ImageCreateFromPng("img/encuentrame.png");
	
	$white = imagecolorallocate($imagen_p, 255, 255, 255);
    $text_colour = imagecolorallocate( $imagen_p, 0, 0, 0 );
    
	imagefill($imagen_p, 0, 0, $white);
	imagettftext($imagen_p, 15, 0 , 10, 45, $text_colour, "./gafata.ttf" , "¿ Me has visto ?" );
	imagettftext($imagen_p, 15, 0 , 10, 65, $text_colour, "./gafata.ttf" , "  me perdí en" );
	imagettftext($imagen_p, 15, 0 , 10, 85, $text_colour, "./gafata.ttf" , "    La Reina" );
	
	imagettftext($imagen_p, 15, 0 , 10, 145, $text_colour, "./gafata.ttf" , "  Haz click para" );
	imagettftext($imagen_p, 15, 0 , 10, 165, $text_colour, "./gafata.ttf"  , "   dar un dato  " );
	
		
	$imagen = ImageCreateFromPng($nombre_archivo);
	imagecopyresampled($imagen_p, $imagen, 150, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
	
	list($ancho, $alto) = getimagesize("img/encuentrame.png");
	$nuevo_ancho = $ancho * 0.8;
	$nuevo_alto = $alto * 0.8;
	
	imagecopyresampled($imagen_p, $imagen_logo, 15, 190, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
	
	// Imprimir
	imagepng($imagen_p,'banner/' . $pais . '-' . $nombreImg . '-'. $altoRequerido .'x' . $anchoRequerido . '.png');
}

//generarImg(320, 240, "yanira_alexandra_valenzuela_villa", "Chile");

?>