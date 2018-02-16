<?php

#Charger automatiquement les fichiers


#fonction static : pas besoin d'instancier la class. /
# elle est deconnecté de l'objet : attaché a la classe ->quand on l'appelle on passe par le nom de la classe.
# les fontions static ne peuvent appeler que des fonctions static


#Une function non static peut appeler une function static : utilisation mot clé : self

class Autoloader {

    public static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class) {
       # echo 'Autoload pour : ';
       #     print_r($class);
       #  echo '<br>';
        require PATH_ROOT . '/' . $class . '.php';
    }

}