<?php

namespace ContainerDzr6eXa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Customers\Infrastructure\Symfony\Controller\RegistrationController' shared autowired service.
     *
     * @return \App\Customers\Infrastructure\Symfony\Controller\RegistrationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Customers/Infrastructure/Symfony/Controller/RegistrationController.php';

        $container->services['App\\Customers\\Infrastructure\\Symfony\\Controller\\RegistrationController'] = $instance = new \App\Customers\Infrastructure\Symfony\Controller\RegistrationController(($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Customers\\Infrastructure\\Symfony\\Controller\\RegistrationController', $container));

        return $instance;
    }
}
