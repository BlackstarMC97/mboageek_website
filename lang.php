<?php
    // include i18n class and initialize it
    require_once 'i18n.class.php';
    $i18n = new i18n('lang/lang_{LANGUAGE}.ini', 'langcache/', 'fr');
    // Parameters: language file path, cache dir, default language (all optional)

    // init object: load language files, parse them if not cached, and so on.
    $i18n->init();

    if(!isset($_GET['lang']))
    {
        $_GET['lang'] = 'fr';
    }
?>