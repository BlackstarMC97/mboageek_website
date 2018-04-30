<?php class L {
const accueil = 'Accueil';
const recherche = 'Rechercher';
const services = 'Services';
const villepays = 'Douala, Cameroun';
const apropos = 'A propos';
const galerie = 'Galerie';
const realisations = 'Réalisations';
const tarifs = 'Tarifs';
const langue = 'Langue';
const title_accueil = 'Accueil | MboaGeek';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}