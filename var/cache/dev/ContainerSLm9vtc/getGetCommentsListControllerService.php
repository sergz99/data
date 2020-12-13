<?php

namespace ContainerSLm9vtc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetCommentsListControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Comment\GetCommentsListController' shared autowired service.
     *
     * @return \App\Controller\Comment\GetCommentsListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Comment/GetCommentsListController.php';

        return $container->services['App\\Controller\\Comment\\GetCommentsListController'] = new \App\Controller\Comment\GetCommentsListController(($container->privates['App\\Repository\\CommentRepository'] ?? $container->load('getCommentRepositoryService')));
    }
}