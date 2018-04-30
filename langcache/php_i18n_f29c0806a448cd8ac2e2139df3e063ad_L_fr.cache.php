<?php class L {
const accueil = 'Accueil';
const recherche = 'Rechercher';
const title_accueil = 'Accueil | MboaGeek';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}