<?php

namespace ContainerSLm9vtc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Registration\RegisterController' shared autowired service.
     *
     * @return \App\Controller\Registration\RegisterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Registration/RegisterController.php';

        return $container->services['App\\Controller\\Registration\\RegisterController'] = new \App\Controller\Registration\RegisterController(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
