<?php
 
namespace AppBundle\Twig;

/*
 * 
 * Clase para crear Filtros personalizados.
 */
class FilterVista extends \Twig_extension{
    
    public function getFilters() {
	return array(
	    // El segundo nombre del array es el nombre del filtro creado debajo.
	    new \Twig_SimpleFilter('addText', array($this, 'addText'))
	);
    }
    
    public function addText($cadena, $numero) {
	return $cadena . " Texto concatenados " . "numero: " . $numero;
    }
    
    public function getName() {
	return 'filter_vistas';

    }
}