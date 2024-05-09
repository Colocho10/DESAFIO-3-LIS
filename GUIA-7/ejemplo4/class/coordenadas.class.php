<?php
class coordenadas {
    // Propiedad privada que almacena las coordenadas x e y
    private $coords = array('x' => 0, 'y' => 0);
    
    // Método mágico __get() para acceder a las propiedades privadas
    function __get($property) {
        // Verifica si la propiedad solicitada existe en el array de coordenadas
        if(array_key_exists($property, $this->coords)) {
            // Devuelve el valor de la propiedad si existe
            return $this->coords[$property];
        } else {
            // Imprime un mensaje de error si la propiedad no existe
            print "Error: Sólo se aceptan coordenadas x y y.<br />\n";
        }
    }
    
    // Método mágico __set() para establecer los valores de las propiedades privadas
    function __set($property, $value) {
        // Verifica si la propiedad solicitada existe en el array de coordenadas
        if(array_key_exists($property, $this->coords)) {
            // Establece el valor de la propiedad si existe
            $this->coords[$property] = $value;
        } else {
            // Imprime un mensaje de error si la propiedad no existe
            print "Error: No se puede escribir otra coordenada más que x y y.<br />\n";
        }
    }
}
?>
