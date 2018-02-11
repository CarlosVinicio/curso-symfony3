<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \AppBundle\Entity\Curso;

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
	    array('producto' => 'Consola 1','precio' => 2),
	    array('producto' => 'Consola 2','precio' => 5),
	    array('producto' => 'Consola 3','precio' => 1),
	    array('producto' => 'Consola 4','precio' => 5),
	    array('producto' => 'Consola 5','precio' => 4)
	];
	
	$frutas = ['manzana' => 'golden', 'pera' => 'rica'];
	
        return $this->render('AppBundle:Pruebas:index.html.twig', [
            'texto' => "Hola soy " . $name . " " .$page,
	    'productos' => $productos,
	    'frutas' => $frutas
        ]);
    }
    
    public function createAction() 
    {
	var_dump('in');
	$curso = new Curso();
	$curso->setTitulo('Curso de Symfony3 de Carlos Vinicio');
	$curso->setDescripcion('Curso de symfony3');
	$curso->setPrecio(22);
	
	// Entity Manager de Doctrine
	$em = $this->getDoctrine()->entityManager();
	$em->persist($curso); // Guardamos los datos al ORM 
	$flush = $em->flush(); // Volcamos los datos del ORM a la BBDD.
	
	// 
	if ($flush != NULL){
	    echo 'El curso no se ha creado bien';
	} else {
	    echo 'El curso se ha creado correctamente';
	}
	
	die();
    }
    
}
