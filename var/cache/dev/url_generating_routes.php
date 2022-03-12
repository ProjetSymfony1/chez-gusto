<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'user-index' => [[], ['_controller' => 'App\\Controller\\UserController::indexUser'], [], [['text', '/user/index']], [], [], []],
    'user-contactForm' => [[], ['_controller' => 'App\\Controller\\UserController::contactForm'], [], [['text', '/user/contactForm']], [], [], []],
    'user-updateForm' => [[], ['_controller' => 'App\\Controller\\UserController::updateForm'], [], [['text', '/user/updateInfoClient']], [], [], []],
    'user-reserver' => [[], ['_controller' => 'App\\Controller\\UserController::reserver'], [], [['text', '/user/reservation']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\homepageController::home'], [], [['text', '/']], [], [], []],
    'inscriptionForm' => [[], ['_controller' => 'App\\Controller\\homepageController::inscrire'], [], [['text', '/inscriptionForm']], [], [], []],
    'connexionForm' => [[], ['_controller' => 'App\\Controller\\homepageController::connecter'], [], [['text', '/connexionForm']], [], [], []],
    'non-reserver' => [[], ['_controller' => 'App\\Controller\\homepageController::pasReserver'], [], [['text', '/reserve-non-connexion']], [], [], []],
    'menu' => [[], ['_controller' => 'App\\Controller\\homepageController::menu'], [], [['text', '/nos-Menu']], [], [], []],
    'connexion' => [[], ['_controller' => 'App\\Controller\\homepageController::okConnect'], [], [['text', '/okConnect']], [], [], []],
    'contactUs' => [[], ['_controller' => 'App\\Controller\\homepageController::contactUs'], [], [['text', '/contactUs']], [], [], []],
];
