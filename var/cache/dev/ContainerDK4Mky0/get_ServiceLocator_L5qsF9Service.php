<?php

namespace ContainerDK4Mky0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L5qsF9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L_5qsF9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L_5qsF9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
            'userRepository' => ['privates', 'App\\Customers\\Domain\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'translator' => '?',
            'userRepository' => 'App\\Customers\\Domain\\Repository\\UserRepository',
        ]);
    }
}
