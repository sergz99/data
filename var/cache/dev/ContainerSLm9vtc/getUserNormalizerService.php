<?php

namespace ContainerSLm9vtc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserNormalizerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Serializer\Normalizer\UserNormalizer' shared autowired service.
     *
     * @return \App\Serializer\Normalizer\UserNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Serializer/Normalizer/UserNormalizer.php';

        return $container->privates['App\\Serializer\\Normalizer\\UserNormalizer'] = new \App\Serializer\Normalizer\UserNormalizer(($container->privates['App\\Security\\UserResolver'] ?? $container->load('getUserResolverService')), ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService')));
    }
}
