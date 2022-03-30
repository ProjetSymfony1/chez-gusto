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
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::cart'], [], [['text', '/cart']], [], [], []],
    'add-cart' => [[], ['_controller' => 'App\\Controller\\CartController::addCart'], [], [['text', '/addCart']], [], [], []],
    'favoris' => [[], ['_controller' => 'App\\Controller\\FavoriteController::menu'], [], [['text', '/favoris']], [], [], []],
    'add-fav' => [[], ['_controller' => 'App\\Controller\\FavoriteController::addFav'], [], [['text', '/addFavoris']], [], [], []],
    'del-fav' => [[], ['_controller' => 'App\\Controller\\FavoriteController::delFav'], [], [['text', '/supFavoris']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomepageController::home'], [], [['text', '/']], [], [], []],
    'menu' => [[], ['_controller' => 'App\\Controller\\HomepageController::menu'], [], [['text', '/menu']], [], [], []],
    'reservation' => [[], ['_controller' => 'App\\Controller\\HomepageController::book'], [], [['text', '/reservation']], [], [], []],
    'manageBookings' => [[], ['_controller' => 'App\\Controller\\ManageBookings::booking'], [], [['text', '/manageBooking']], [], [], []],
    'delBooking' => [[], ['_controller' => 'App\\Controller\\ManageBookings::delBooking'], [], [['text', '/user/delBooking']], [], [], []],
    'adminBookings' => [[], ['_controller' => 'App\\Controller\\ManageBookings::adminManageBookings'], [], [['text', '/admin/adminManageBookings']], [], [], []],
    'add-dish' => [[], ['_controller' => 'App\\Controller\\MenuController::add'], [], [['text', '/addDish']], [], [], []],
    'del-dish' => [[], ['_controller' => 'App\\Controller\\MenuController::del'], [], [['text', '/delDish']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\MessageController::message'], [], [['text', '/contact']], [], [], []],
    'userMessages' => [[], ['_controller' => 'App\\Controller\\MessageController::mesMessages'], [], [['text', '/user/message']], [], [], []],
    'delMessage' => [[], ['_controller' => 'App\\Controller\\MessageController::delMessage'], [], [['text', '/user/delMessage']], [], [], []],
    'adminMessages' => [[], ['_controller' => 'App\\Controller\\MessageController::getMessages'], [], [['text', '/admin/message']], [], [], []],
    'checkMessage' => [[], ['_controller' => 'App\\Controller\\MessageController::checkMessage'], [], [['text', '/user/checkMessage']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_booking' => [[], ['_controller' => 'App\\Controller\\ReservationController::book'], [], [['text', '/Booking']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'account' => [[], ['_controller' => 'App\\Controller\\UserController::myAccount'], [], [['text', '/myAccount']], [], [], []],
    'updateInfo' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/updateInfo']], [], [], []],
];
