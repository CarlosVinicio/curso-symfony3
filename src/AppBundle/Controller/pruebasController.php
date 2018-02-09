<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{
 
    public function indexAction(Request $request, $name, $page)
    {
        
        /* Realizar reedirecciones
	    return $this->redirect($this->generateUrl("helloWorld"));
	    return $this->redirect($request->getBaseUrl() . "/hello-world?hola=true") 
	*/;
	
	// Podemos recoger variables get y post
	
	/* var_dump($request->query->get("hola")); //variables get
	var_dump($request->get("envioPost")); // variables post
	die(); */
	
        // name y surmane son los parametros pasados como parametros en las rutas
        // replace this example code with whatever you need
	
	$productos = [
	    array('producto' => 'Consola','precio' => 2),
	    array('producto' => 'Consola','precio' => 2),
	    array('producto' => 'Consola','precio' => 2),
	    array('producto' => 'Consola','precio' => 2),
	    array('producto' => 'Consola','precio' => 2)
	];
	
	$frutas = ['manzana' => 'golden', 'pera' => 'rica'];
	
        return $this->render('AppBundle:Pruebas:index.html.twig', [
            'texto' => "Hola soy " . $name . " " .$page,
	    'productos' => $productos,
	    'frutas' => $frutas
        ]);
    } 
}
