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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/astuces' => [[['_route' => 'astuces', '_controller' => 'App\\Controller\\AstucesController::index'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/basic' => [[['_route' => 'basic', '_controller' => 'App\\Controller\\BackController::basictable'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coachlist' => [[['_route' => 'coachlist', '_controller' => 'App\\Controller\\CoachlistController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/addProgramme' => [[['_route' => 'addProgramme', '_controller' => 'App\\Controller\\JsonController::ajouterProgramme'], null, null, null, false, false, null]],
        '/deleteAppointment' => [[['_route' => 'deleteAppointment', '_controller' => 'App\\Controller\\JsonController::deleteAppointmentAction'], null, null, null, false, false, null]],
        '/updateAppointment' => [[['_route' => 'updateAppointment', '_controller' => 'App\\Controller\\JsonController::modifierAppointmentAction'], null, null, null, false, false, null]],
        '/displayProgramme' => [[['_route' => 'displayProgramme', '_controller' => 'App\\Controller\\JsonController::allprogram'], null, null, null, false, false, null]],
        '/detailAppointment' => [[['_route' => 'detail_reclamation', '_controller' => 'App\\Controller\\JsonController::detailAppointmentAction'], null, null, null, false, false, null]],
        '/program' => [[['_route' => 'program', '_controller' => 'App\\Controller\\ProgramController::index'], null, null, null, false, false, null]],
        '/calendrier' => [[['_route' => 'calendrier', '_controller' => 'App\\Controller\\ProgramController::calendar'], null, null, null, false, false, null]],
        '/programme' => [[['_route' => 'programme_index', '_controller' => 'App\\Controller\\ProgrammeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/programme/new' => [[['_route' => 'programme_new', '_controller' => 'App\\Controller\\ProgrammeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stories' => [[['_route' => 'stories', '_controller' => 'App\\Controller\\StoriesController::index'], null, null, null, false, false, null]],
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
                .'|/api/([^/]++)/edit(*:187)'
                .'|/calendar/([^/]++)(?'
                    .'|(*:216)'
                    .'|/edit(*:229)'
                    .'|(*:237)'
                .')'
                .'|/programme/([^/]++)(?'
                    .'|(*:268)'
                    .'|/edit(*:281)'
                    .'|(*:289)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        216 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        268 => [[['_route' => 'programme_show', '_controller' => 'App\\Controller\\ProgrammeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'programme_edit', '_controller' => 'App\\Controller\\ProgrammeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        289 => [
            [['_route' => 'programme_delete', '_controller' => 'App\\Controller\\ProgrammeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
