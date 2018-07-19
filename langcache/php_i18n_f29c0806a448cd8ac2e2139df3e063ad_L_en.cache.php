<?php class L {
const accueil = 'Home';
const recherche = 'Search';
const services = 'Services';
const villepays = 'Douala, Cameroon';
const apropos = 'Agency';
const galerie = 'Portfolio';
const realisations = 'Works';
const tarifs = 'Pricing';
const langue = 'Language';
const mboageekrole = '';
const droits = 'All rights reserved';
const lireplus = 'Read more';
const apercu = 'View';
const lien = 'Link';
const servicestitle = 'Our multiple services';
const servicesintro = 'Discover our range of services in the field of IT that go further than those of <br> a simple web development agency';
const fonctionstitle = 'Custom websites';
const fonctionsintro = 'Take a look at the list below to learn about the features of our <br> web development services';
const projetstitle = 'Recent works';
const projetsintro = 'Check out a list of multiple web development projects we\'ve recently done for several <br> companies and startups like yours';
const service_devweb = 'Web development';
const service_dotnet = '.NET Softwares';
const service_marketing = 'Digital marketing';
const service_consulting = 'IT Consulting';
const service_embarque = 'Embedded systems';
const service_ia = 'Artificial intelligence';
const description_devweb = 'For web sites and software designed for you';
const description_dotnet = 'To save time with precise management software';
const description_marketing = 'To increase your visibility and your address book';
const description_consulting = 'For free information about an IT topic';
const description_embarque = 'To discover electronics with Arduino and Raspberry';
const description_ia = 'For setting up smarts and customs chatbots';
const description_referencement = 'Improve your position on the Google search engine';
const description_responsive = 'Your website must be beautiful on any device';
const description_code = 'For standards and easily maintenable codes';
const description_pages = 'Enjoy a website with very high performances';
const description_conseil = 'Get new ideas to improve your business';
const description_support = 'Have support for maintening your website';
const fonction_referencement = 'Natural referencing';
const fonction_responsive = 'Responsive design';
const fonction_code = 'Clean code';
const fonction_pages = 'Optimized pages';
const fonction_conseil = 'Professional advices';
const fonction_support = 'Free support';
const agribizz_title = 'AgriBizz website';
const agribizz_intro = 'The startup AgriBizz is an organization that offers drone services and other innovative technologies to improve the agricultural sector.';
const fconsulting_title = 'FConsulting website';
const fconsulting_intro = 'The startup FConsulting is an office of study, consulting and realization of real-time and embedded applications whose field of action is the zone Africa.';
const acager_title = 'ACAGER Website';
const acager_intro = 'ACAGER is an association that aims to ensure high-level studies in the field of geomatics and land-use planning.';
const title_accueil = 'Home | MboaGeek';
const title_erreur404 = 'Error 404 | MboaGeek';
const title_apropos = 'About | MboaGeek';
const title_services = 'Services | MboaGeek';
const title_galerie = 'Portfolio | MboaGeek';
const title_tarifs = 'Pricing | MboaGeek';
const title_contactus = 'Contact us | MboaGeek';
const error_msg = '404, Page not found';
const error_texte = 'The Page you are looking for doesn\'t exist or an other error occurred.';
const error_btntext = 'GO BACK TO THE HOMEPAGE';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}