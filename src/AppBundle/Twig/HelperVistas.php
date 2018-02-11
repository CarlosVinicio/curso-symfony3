<?php
# En esta clase vamos a definir nuevas funciones o herlpers para integrarlo en Twig
namespace AppBundle\Twig;

class HelperVistas extends \Twig_Extension{
    
    public function getName() {
	return "app_bundle";
    }
    
    public function getFunctions(){
	return array(
	    /* Nombre de la funcion nueva del helper

	     * generateTable del new sera el nombre de la funcion que podremos utilizar en Twig
	     * 	     */
	    'generateTable' => new \Twig_Function_Method($this, 'generateTable')
	);
    }
    
    /**
     * Nombre de la funcion establecida en getFunctions
     * Para poder añadir esta funcion a las funciones de TWIG tenemos que añadirlo a app/config/services.yml
     */
    public function generateTable($num_filas, $num_cols) {
	$table = "<table class='table' border='2'>";
	for ($i = 0; $i<$num_filas; $i++) {
	    $table .= "<tr>";
	    for($j=0; $j< $num_cols; $j++){
		
		$table .= "<td>" . 'columna' . "</td>";
	    }
	    $table .= "</tr>";
	}
	
	$table .= "</table>";
	
	return $table;
    }
}
