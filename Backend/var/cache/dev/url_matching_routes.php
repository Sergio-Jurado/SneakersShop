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
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/check-auth' => [[['_route' => 'check_auth', '_controller' => 'App\\Controller\\SecurityController::checkAuth'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sneaker' => [[['_route' => 'app_sneaker_index', '_controller' => 'App\\Controller\\SneakerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sneaker/new' => [[['_route' => 'app_sneaker_new', '_controller' => 'App\\Controller\\SneakerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|errors(?:/(\\d+))?(*:70)'
                        .'|validation_errors/([^/]++)(*:103)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:140)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:171)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:210)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:247)'
                        .')'
                        .'|addresses(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:294)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:320)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:358)'
                            .')'
                        .')'
                        .'|photos(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:403)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:429)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:467)'
                            .')'
                        .')'
                        .'|sneakers(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:514)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:540)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:578)'
                            .')'
                        .')'
                        .'|tickets(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:624)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:650)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:688)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:732)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:758)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:796)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:839)'
                    .'|wdt/([^/]++)(*:859)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:901)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:938)'
                                .'|router(*:952)'
                                .'|exception(?'
                                    .'|(*:972)'
                                    .'|\\.css(*:985)'
                                .')'
                            .')'
                            .'|(*:995)'
                        .')'
                    .')'
                .')'
                .'|/sneaker/(?'
                    .'|([^/]++)(?'
                        .'|(*:1029)'
                        .'|/edit(*:1043)'
                        .'|(*:1052)'
                    .')'
                    .'|new(*:1065)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.not_exposed', 'status' => '500'], ['status'], null, null, false, true, null]],
        103 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        171 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        210 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        247 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        294 => [[['_route' => '_api_/addresses/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Address', '_api_operation_name' => '_api_/addresses/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        320 => [
            [['_route' => '_api_/addresses{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Address', '_api_operation_name' => '_api_/addresses{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/addresses{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Address', '_api_operation_name' => '_api_/addresses{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        358 => [
            [['_route' => '_api_/addresses/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Address', '_api_operation_name' => '_api_/addresses/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/addresses/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Address', '_api_operation_name' => '_api_/addresses/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/addresses/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Address', '_api_operation_name' => '_api_/addresses/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        403 => [[['_route' => '_api_/photos/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        429 => [
            [['_route' => '_api_/photos{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/photos{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        467 => [
            [['_route' => '_api_/photos/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/photos/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/photos/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Photo', '_api_operation_name' => '_api_/photos/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        514 => [[['_route' => '_api_/sneakers/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Sneaker', '_api_operation_name' => '_api_/sneakers/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        540 => [
            [['_route' => '_api_/sneakers{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Sneaker', '_api_operation_name' => '_api_/sneakers{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/sneakers{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Sneaker', '_api_operation_name' => '_api_/sneakers{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        578 => [
            [['_route' => '_api_/sneakers/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Sneaker', '_api_operation_name' => '_api_/sneakers/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/sneakers/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Sneaker', '_api_operation_name' => '_api_/sneakers/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/sneakers/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Sneaker', '_api_operation_name' => '_api_/sneakers/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        624 => [[['_route' => '_api_/tickets/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Ticket', '_api_operation_name' => '_api_/tickets/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        650 => [
            [['_route' => '_api_/tickets{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Ticket', '_api_operation_name' => '_api_/tickets{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/tickets{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Ticket', '_api_operation_name' => '_api_/tickets{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        688 => [
            [['_route' => '_api_/tickets/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Ticket', '_api_operation_name' => '_api_/tickets/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/tickets/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Ticket', '_api_operation_name' => '_api_/tickets/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/tickets/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Ticket', '_api_operation_name' => '_api_/tickets/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        732 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        758 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        796 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        839 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        859 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        901 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        938 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        952 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        972 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        985 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        995 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1029 => [[['_route' => 'app_sneaker_show', '_controller' => 'App\\Controller\\SneakerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1043 => [[['_route' => 'app_sneaker_edit', '_controller' => 'App\\Controller\\SneakerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1052 => [[['_route' => 'app_sneaker_delete', '_controller' => 'App\\Controller\\SneakerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1065 => [
            [['_route' => 'zapatilla_new', '_controller' => 'App\\Controller\\ZapatillaController::new'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
