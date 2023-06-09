<?php

namespace ContainerDK4Mky0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_23gkdPnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.23gkdPn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.23gkdPn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Customers\\Infrastructure\\Symfony\\Security\\UserAuthenticator', 'getUserAuthenticatorService', true],
            'userAuthenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
        ], [
            'authenticator' => 'App\\Customers\\Infrastructure\\Symfony\\Security\\UserAuthenticator',
            'userAuthenticator' => '?',
        ]);
    }
}
