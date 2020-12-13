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
        '/api/articles' => [
            [['_route' => 'api_articles_post', '_controller' => 'App\\Controller\\Article\\CreateArticleController'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_articles_list', '_controller' => 'App\\Controller\\Article\\GetArticlesListController'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/users' => [[['_route' => 'api_users_post', '_controller' => 'App\\Controller\\Registration\\RegisterController'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/login' => [[['_route' => 'api_users_login', '_controller' => 'App\\Controller\\Security\\LoginController'], null, ['POST' => 0], null, false, false, null]],
        '/api/tags' => [[['_route' => 'api_tags_list', '_controller' => 'App\\Controller\\Tag\\GetTagsListController'], null, ['GET' => 0], null, false, false, null]],
        '/api/user' => [
            [['_route' => 'api_user_get', '_controller' => 'App\\Controller\\User\\GetUserController'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_users_put', '_controller' => 'App\\Controller\\User\\UpdateUserController'], null, ['PUT' => 0], null, false, false, null],
        ],
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
                .'|/api/(?'
                    .'|articles/(?'
                        .'|([^/]++)(?'
                            .'|(*:200)'
                            .'|/favorite(*:217)'
                        .')'
                        .'|feed(*:230)'
                        .'|([^/]++)(?'
                            .'|(*:249)'
                            .'|/(?'
                                .'|favorite(*:269)'
                                .'|comments(?'
                                    .'|(*:288)'
                                    .'|/([^/]++)(*:305)'
                                    .'|(*:313)'
                                .')'
                            .')'
                            .'|(*:323)'
                        .')'
                    .')'
                    .'|profiles/([^/]++)(?'
                        .'|/follow(?'
                            .'|(*:363)'
                        .')'
                        .'|(*:372)'
                    .')'
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
        200 => [[['_route' => 'api_articles_delete', '_controller' => 'App\\Controller\\Article\\DeleteArticleController'], ['slug'], ['DELETE' => 0], null, false, true, null]],
        217 => [[['_route' => 'api_article_favorite', '_controller' => 'App\\Controller\\Article\\FavoriteArticleController'], ['slug'], ['POST' => 0], null, false, false, null]],
        230 => [[['_route' => 'api_articles_feed', '_controller' => 'App\\Controller\\Article\\GetArticlesFeedController'], [], ['GET' => 0], null, false, false, null]],
        249 => [[['_route' => 'api_articles_get', '_controller' => 'App\\Controller\\Article\\GetOneArticleController'], ['slug'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'api_article_unfavorite', '_controller' => 'App\\Controller\\Article\\UnfavoriteArticleController'], ['slug'], ['DELETE' => 0], null, false, false, null]],
        288 => [[['_route' => 'api_comment_post', '_controller' => 'App\\Controller\\Comment\\CreateCommentController'], ['slug'], ['POST' => 0], null, false, false, null]],
        305 => [[['_route' => 'api_comments_delete', '_controller' => 'App\\Controller\\Comment\\DeleteCommentController'], ['slug', 'id'], ['DELETE' => 0], null, false, true, null]],
        313 => [[['_route' => 'api_comments_list', '_controller' => 'App\\Controller\\Comment\\GetCommentsListController'], ['slug'], ['GET' => 0], null, false, false, null]],
        323 => [[['_route' => 'api_articles_put', '_controller' => 'App\\Controller\\Article\\UpdateArticleController'], ['slug'], ['PUT' => 0], null, false, true, null]],
        363 => [
            [['_route' => 'api_profiles_follow', '_controller' => 'App\\Controller\\Profile\\FollowProfileController'], ['username'], ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profiles_unfollow', '_controller' => 'App\\Controller\\Profile\\UnfollowProfileController'], ['username'], ['DELETE' => 0], null, false, false, null],
        ],
        372 => [
            [['_route' => 'api_profiles_get', '_controller' => 'App\\Controller\\Profile\\GetProfileController'], ['username'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
