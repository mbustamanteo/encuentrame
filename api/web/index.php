<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/includes/phpQuery.php';

require_once __DIR__.'/img.php';

use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();
$app["debug"] = True;


$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'dbname'   => 'encuentrame',
        'user' 	   => 'encuentrame',
        'password' => '123456'
    ),
));

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/templates',
));

$app->get('/ver/conductor/{rut}', function ($rut) use ($app) {
	

	return $app['twig']->render('ver-conductor.twig',array(
		'conductores' => $conductores
	));	
});

$app->get('/nino/{pais}.json', function(Request $request, $pais) use($app) {
    $params = $request->query->all();
    $args = array();

    // Params which are on the PATH_INFO
    foreach ( $params as $key => $val ){
        $args[$key] = $val;
    }
    
    $paisid = 1;
    /*
    // obtener niño aleatorio
    $sql = "SELECT n.nombre, n.imagen AS img, p.nombre AS pais
    		FROM nino AS n
    		INNER JOIN ciudad AS c 
    		ON n.ciudadid = c.id 
    		INNER JOIN pais AS p 
    		ON c.paisid = p.id
    		WHERE c.paisid = ?";
    $ninos = $app['db']->fetchAll($sql, array((string) $paisid));
	$num = rand(0,count($ninos) - 1);
	
	$nino = $ninos[$num];
	*/
	
	$nino["nombre"] = "yanira_alexandra_valenzuela_villa";
	$nino["pais"] = "Chile";
	$nino["img"] = "";
	
    $datos = getBannerDatos($pais, 240, 320,$nino);
    $string = json_encode($datos);

    return $string;
});

$app->run();
