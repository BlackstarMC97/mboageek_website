<?php class L {
const accueil = 'Accueil';
const recherche = 'Rechercher';
const services = 'Services';
const villepays = 'Douala, Cameroun';
const apropos = 'L\'agence';
const galerie = 'Galerie';
const realisations = 'Réalisations';
const tarifs = 'Tarifs';
const langue = 'Langue';
const mboageekrole = 'Prestataire de services en ingénierie logicielle';
const droits = 'Tous droits réservés';
const lireplus = 'Lire plus';
const apercu = 'Aperçu';
const lien = 'Lien';
const servicestitle = 'Nos multiples services';
const servicesintro = 'Découvrez notre gamme de services dans le domaine de l\'IT qui vont plus loin <br> que ceux d\'une simple agence de développement web';
const fonctionstitle = 'Des sites web sur mesure';
const fonctionsintro = 'Jetez un coup d\'oeil à la liste ci-dessous afin de prendre connaissance des caractéristiques <br> de nos services de développement web';
const projetstitle = 'Projets récents';
const projetsintro = 'Admirez une liste de multiples projets de développement web que nous avons récemment réalisés <br> pour plusieurs entreprises et startups comme la votre';
const service_devweb = 'Développement web';
const service_dotnet = 'Génie logiciel .NET';
const service_marketing = 'Marketing digital';
const service_consulting = 'Consultation en IT';
const service_embarque = 'Systèmes embarqués';
const service_ia = 'Intelligence artificielle';
const description_devweb = 'Pour des sites et logiciels web conçus pour vous sur mesure';
const description_dotnet = 'Pour gagner en temps avec un logiciel de gestion précis';
const description_marketing = 'Pour augmenter votre visibilité et votre carnet d\'adresses';
const description_consulting = 'Pour des renseignements gratuits concernant un sujet IT';
const description_embarque = 'Pour découvrir l\'électronique avec Arduino et Raspberry';
const description_ia = 'Pour la mise en place d\'agents conversationnels (chatbots)';
const description_referencement = 'Améliorez votre position sur le moteur de recherche Google';
const description_responsive = 'Votre site se doit d\'être splendide sur tout appareil';
const description_code = 'Pour des codes standards et facilement maintenables';
const description_pages = 'Profitez d\'un site aux performances très élevées';
const description_conseil = 'Bénéficiez de nouvelles idées pour améliorer votre business';
const description_support = 'Disposez d\'un soutien pour la maintenance de votre site';
const fonction_referencement = 'Reférencement naturel';
const fonction_responsive = 'Responsive design';
const fonction_code = 'Code propre';
const fonction_pages = 'Pages optimisées';
const fonction_conseil = 'Conseils professionnels';
const fonction_support = 'Support gratuit';
const agribizz_title = 'Site web d\'AgriBizz';
const agribizz_intro = 'La startup AgriBizz est une organisation qui propose des services de drones et autres technologies innovantes afin d\'améliorer le secteur agricole.';
const fconsulting_title = 'Site web de FConsulting';
const fconsulting_intro = 'La startup FConsulting est un bureau d\'étude, de conseil et de réalisation d\'applications temps-réel et embarquées au dont le champ d\'action est la zone Afrique.';
const acager_title = 'Site web de l\'ACAGER';
const acager_intro = 'L\'ACAGER est une association qui a pour but d\'assurer des études en de haut niveau dans le domaine de la géomatique et de l\'aménagement du territoire.';
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