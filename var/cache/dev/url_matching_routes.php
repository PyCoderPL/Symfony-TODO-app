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
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/lists/(?'
                    .'|addnewtask/([^/]++)(*:71)'
                    .'|remove(?'
                        .'|list/([^/]++)(*:100)'
                        .'|task/([^/]++)(*:121)'
                    .')'
                    .'|edit/([^/]++)(?'
                        .'|(*:146)'
                        .'|/([^/]++)(*:163)'
                    .')'
                    .'|change/([^/]++)/([^/]++)(*:196)'
                    .'|([^/]++)(?'
                        .'|(*:215)'
                        .'|/([^/]++)(*:232)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [[['_route' => 'app.add_new_task', '_controller' => 'App\\Controller\\CreateController::createNewTask'], ['listname'], null, null, false, true, null]],
        100 => [[['_route' => 'app.remove_list', '_controller' => 'App\\Controller\\CreateController::removeList'], ['listname'], null, null, false, true, null]],
        121 => [[['_route' => 'app.remove_task', '_controller' => 'App\\Controller\\CreateController::removeTask'], ['id'], null, null, false, true, null]],
        146 => [[['_route' => 'app.edit_list', '_controller' => 'App\\Controller\\EditController::editList'], ['listname'], null, null, false, true, null]],
        163 => [[['_route' => 'app.edit_task', '_controller' => 'App\\Controller\\EditController::editTask'], ['listname', 'id'], null, null, false, true, null]],
        196 => [[['_route' => 'app.finished', '_controller' => 'App\\Controller\\EditController::setFinished'], ['id', 'finished'], null, null, false, true, null]],
        215 => [[['_route' => 'app.all_tasks', '_controller' => 'App\\Controller\\MainController::showTasks'], ['listname'], null, null, false, true, null]],
        232 => [
            [['_route' => 'app.one_task', '_controller' => 'App\\Controller\\MainController::showOneTask'], ['listname', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
