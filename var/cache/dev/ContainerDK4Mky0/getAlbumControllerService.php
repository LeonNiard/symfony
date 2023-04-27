<?php

namespace ContainerDK4Mky0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAlbumControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Artists\Infrastructure\Symfony\Controller\AlbumController' shared autowired service.
     *
     * @return \App\Artists\Infrastructure\Symfony\Controller\AlbumController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Artists/Infrastructure/Symfony/Controller/AlbumController.php';

        $container->services['App\\Artists\\Infrastructure\\Symfony\\Controller\\AlbumController'] = $instance = new \App\Artists\Infrastructure\Symfony\Controller\AlbumController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Artists\\Infrastructure\\Symfony\\Controller\\AlbumController', $container));

        return $instance;
    }
}
