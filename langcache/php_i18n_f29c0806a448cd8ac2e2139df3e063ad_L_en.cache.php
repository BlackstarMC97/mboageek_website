<?php class L {
const accueil = 'Home';
const recherche = 'Search';
const services = 'Services';
const villepays = 'Douala, Cameroon';
const apropos = 'About us';
const galerie = 'Portfolio';
const realisations = 'Works';
const tarifs = 'Pricing';
const langue = 'Language';
const title_accueil = 'Home | MboaGeek';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}