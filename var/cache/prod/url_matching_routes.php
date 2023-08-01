<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/lists/createnewlist' => [[['_route' => 'app.create_new_list', '_controller' => 'App\\Controller\\CreateController::createNewList'], null, null, null, false, false, null]],
        '/lists' => [[['_route' => 'app.lists', '_controller' => 'App\\Controller\\MainController::showLists'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/lists/(?'
                    .'|addnewtask/([^/]++)(*:36)'
                    .'|remove(?'
                        .'|list/([^/]++)(*:65)'
                        .'|task/([^/]++)(*:85)'
                    .')'
                    .'|edit/([^/]++)(?'
                        .'|(*:109)'
                        .'|/([^/]++)(*:126)'
                    .')'
                    .'|change/([^/]++)/([^/]++)(*:159)'
                    .'|([^/]++)(?'
                        .'|(*:178)'
                        .'|/([^/]++)(*:195)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app.add_new_task', '_controller' => 'App\\Controller\\CreateController::createNewTask'], ['listname'], null, null, false, true, null]],
        65 => [[['_route' => 'app.remove_list', '_controller' => 'App\\Controller\\CreateController::removeList'], ['listname'], null, null, false, true, null]],
        85 => [[['_route' => 'app.remove_task', '_controller' => 'App\\Controller\\CreateController::removeTask'], ['id'], null, null, false, true, null]],
        109 => [[['_route' => 'app.edit_list', '_controller' => 'App\\Controller\\EditController::editList'], ['listname'], null, null, false, true, null]],
        126 => [[['_route' => 'app.edit_task', '_controller' => 'App\\Controller\\EditController::editTask'], ['listname', 'id'], null, null, false, true, null]],
        159 => [[['_route' => 'app.finished', '_controller' => 'App\\Controller\\EditController::setFinished'], ['id', 'finished'], null, null, false, true, null]],
        178 => [[['_route' => 'app.all_tasks', '_controller' => 'App\\Controller\\MainController::showTasks'], ['listname'], null, null, false, true, null]],
        195 => [
            [['_route' => 'app.one_task', '_controller' => 'App\\Controller\\MainController::showOneTask'], ['listname', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
