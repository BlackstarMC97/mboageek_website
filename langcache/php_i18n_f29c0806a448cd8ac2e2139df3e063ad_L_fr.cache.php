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
const mboageekrole = 'Prestataire de services en ingénierie logicielle';
const droits = 'Tous droits réservés';
const title_accueil = 'Accueil | MboaGeek';
const title_erreur404 = 'Erreur 404 | MboaGeek';
const title_apropos = 'A propos | MboaGeek';
const title_services = 'Services | MboaGeek';
const title_galerie = 'Galerie | MboaGeek';
const title_tarifs = 'Tarifs | MboaGeek';
const title_contactus = 'Contactez nous | MboaGeek';
const error_msg = '404, Page non trouvée';
const error_texte = 'La page que vous recherchez n\'existe pas ou une erreur s\'est produite.';
const error_btntext = 'RETOURNER A L\'ACCUEIL';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}