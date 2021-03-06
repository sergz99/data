<?php

namespace ContainerSLm9vtc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\User\GetUserController' shared autowired service.
     *
     * @return \App\Controller\User\GetUserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/User/GetUserController.php';

        return $container->services['App\\Controller\\User\\GetUserController'] = new \App\Controller\User\GetUserController(($container->privates['App\\Security\\UserResolver'] ?? $container->load('getUserResolverService')));
    }
}
