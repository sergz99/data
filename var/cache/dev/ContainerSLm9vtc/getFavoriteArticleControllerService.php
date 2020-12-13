<?php

namespace ContainerSLm9vtc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFavoriteArticleControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Article\FavoriteArticleController' shared autowired service.
     *
     * @return \App\Controller\Article\FavoriteArticleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Article/FavoriteArticleController.php';

        return $container->services['App\\Controller\\Article\\FavoriteArticleController'] = new \App\Controller\Article\FavoriteArticleController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Security\\UserResolver'] ?? $container->load('getUserResolverService')));
    }
}
