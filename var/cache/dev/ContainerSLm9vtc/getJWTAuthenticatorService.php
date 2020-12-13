<?php

namespace ContainerSLm9vtc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWTAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\Guard\JWTAuthenticator' shared autowired service.
     *
     * @return \App\Security\Guard\JWTAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Guard/JWTTokenAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/src/Security/Guard/JWTAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/TokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/ChainTokenExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/TokenExtractor/AuthorizationHeaderTokenExtractor.php';

        return $container->privates['App\\Security\\Guard\\JWTAuthenticator'] = new \App\Security\Guard\JWTAuthenticator(($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor([0 => new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization')]), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
