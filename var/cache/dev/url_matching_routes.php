<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Customers\\Infrastructure\\Symfony\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Customers\\Infrastructure\\Symfony\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Customers\\Infrastructure\\Symfony\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Customers\\Infrastructure\\Symfony\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Customers\\Infrastructure\\Symfony\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/album' => [[['_route' => 'app_album_index', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\AlbumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/album/new' => [[['_route' => 'app_album_new', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\AlbumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/song' => [[['_route' => 'app_song_index', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\SongController::index'], null, ['GET' => 0], null, true, false, null]],
        '/song/new' => [[['_route' => 'app_song_new', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\SongController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/album/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/song/([^/]++)(?'
                    .'|(*:234)'
                    .'|/edit(*:247)'
                    .'|(*:255)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'app_album_show', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\AlbumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'app_album_edit', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\AlbumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'app_album_delete', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\AlbumController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_song_show', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\SongController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'app_song_edit', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\SongController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [
            [['_route' => 'app_song_delete', '_controller' => 'App\\Artists\\Infrastructure\\Symfony\\Controller\\SongController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
