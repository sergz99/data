<?php

namespace ContainerSLm9vtc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZDASAPlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zDASAPl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zDASAPl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Article\\DeleteArticleController::__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\FavoriteArticleController::__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\GetArticlesFeedController::__invoke' => ['privates', '.service_locator.KxSUNCO', 'get_ServiceLocator_KxSUNCOService', true],
            'App\\Controller\\Article\\GetArticlesListController::__invoke' => ['privates', '.service_locator.KxSUNCO', 'get_ServiceLocator_KxSUNCOService', true],
            'App\\Controller\\Article\\GetOneArticleController::__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\UnfavoriteArticleController::__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\UpdateArticleController::__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Comment\\CreateCommentController::__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Comment\\DeleteCommentController::__invoke' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\Comment\\GetCommentsListController::__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Profile\\FollowProfileController::__invoke' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'App\\Controller\\Profile\\GetProfileController::__invoke' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'App\\Controller\\Profile\\UnfollowProfileController::__invoke' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Article\\DeleteArticleController:__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\DeleteArticleController' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\FavoriteArticleController:__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\FavoriteArticleController' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\GetArticlesFeedController:__invoke' => ['privates', '.service_locator.KxSUNCO', 'get_ServiceLocator_KxSUNCOService', true],
            'App\\Controller\\Article\\GetArticlesFeedController' => ['privates', '.service_locator.KxSUNCO', 'get_ServiceLocator_KxSUNCOService', true],
            'App\\Controller\\Article\\GetArticlesListController:__invoke' => ['privates', '.service_locator.KxSUNCO', 'get_ServiceLocator_KxSUNCOService', true],
            'App\\Controller\\Article\\GetArticlesListController' => ['privates', '.service_locator.KxSUNCO', 'get_ServiceLocator_KxSUNCOService', true],
            'App\\Controller\\Article\\GetOneArticleController:__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\GetOneArticleController' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\UnfavoriteArticleController:__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\UnfavoriteArticleController' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\UpdateArticleController:__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Article\\UpdateArticleController' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Comment\\CreateCommentController:__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Comment\\CreateCommentController' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Comment\\DeleteCommentController:__invoke' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\Comment\\DeleteCommentController' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\Comment\\GetCommentsListController:__invoke' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Comment\\GetCommentsListController' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Profile\\FollowProfileController:__invoke' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'App\\Controller\\Profile\\FollowProfileController' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'App\\Controller\\Profile\\GetProfileController:__invoke' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'App\\Controller\\Profile\\GetProfileController' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'App\\Controller\\Profile\\UnfollowProfileController:__invoke' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'App\\Controller\\Profile\\UnfollowProfileController' => ['privates', '.service_locator.8PfHC87', 'get_ServiceLocator_8PfHC87Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Article\\DeleteArticleController::__invoke' => '?',
            'App\\Controller\\Article\\FavoriteArticleController::__invoke' => '?',
            'App\\Controller\\Article\\GetArticlesFeedController::__invoke' => '?',
            'App\\Controller\\Article\\GetArticlesListController::__invoke' => '?',
            'App\\Controller\\Article\\GetOneArticleController::__invoke' => '?',
            'App\\Controller\\Article\\UnfavoriteArticleController::__invoke' => '?',
            'App\\Controller\\Article\\UpdateArticleController::__invoke' => '?',
            'App\\Controller\\Comment\\CreateCommentController::__invoke' => '?',
            'App\\Controller\\Comment\\DeleteCommentController::__invoke' => '?',
            'App\\Controller\\Comment\\GetCommentsListController::__invoke' => '?',
            'App\\Controller\\Profile\\FollowProfileController::__invoke' => '?',
            'App\\Controller\\Profile\\GetProfileController::__invoke' => '?',
            'App\\Controller\\Profile\\UnfollowProfileController::__invoke' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Article\\DeleteArticleController:__invoke' => '?',
            'App\\Controller\\Article\\DeleteArticleController' => '?',
            'App\\Controller\\Article\\FavoriteArticleController:__invoke' => '?',
            'App\\Controller\\Article\\FavoriteArticleController' => '?',
            'App\\Controller\\Article\\GetArticlesFeedController:__invoke' => '?',
            'App\\Controller\\Article\\GetArticlesFeedController' => '?',
            'App\\Controller\\Article\\GetArticlesListController:__invoke' => '?',
            'App\\Controller\\Article\\GetArticlesListController' => '?',
            'App\\Controller\\Article\\GetOneArticleController:__invoke' => '?',
            'App\\Controller\\Article\\GetOneArticleController' => '?',
            'App\\Controller\\Article\\UnfavoriteArticleController:__invoke' => '?',
            'App\\Controller\\Article\\UnfavoriteArticleController' => '?',
            'App\\Controller\\Article\\UpdateArticleController:__invoke' => '?',
            'App\\Controller\\Article\\UpdateArticleController' => '?',
            'App\\Controller\\Comment\\CreateCommentController:__invoke' => '?',
            'App\\Controller\\Comment\\CreateCommentController' => '?',
            'App\\Controller\\Comment\\DeleteCommentController:__invoke' => '?',
            'App\\Controller\\Comment\\DeleteCommentController' => '?',
            'App\\Controller\\Comment\\GetCommentsListController:__invoke' => '?',
            'App\\Controller\\Comment\\GetCommentsListController' => '?',
            'App\\Controller\\Profile\\FollowProfileController:__invoke' => '?',
            'App\\Controller\\Profile\\FollowProfileController' => '?',
            'App\\Controller\\Profile\\GetProfileController:__invoke' => '?',
            'App\\Controller\\Profile\\GetProfileController' => '?',
            'App\\Controller\\Profile\\UnfollowProfileController:__invoke' => '?',
            'App\\Controller\\Profile\\UnfollowProfileController' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
