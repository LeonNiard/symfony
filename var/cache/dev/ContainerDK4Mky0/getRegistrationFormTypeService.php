<?php

namespace ContainerDK4Mky0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Customers\Infrastructure\Symfony\Form\RegistrationFormType' shared autowired service.
     *
     * @return \App\Customers\Infrastructure\Symfony\Form\RegistrationFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Customers/Infrastructure/Symfony/Form/RegistrationFormType.php';

        return $container->privates['App\\Customers\\Infrastructure\\Symfony\\Form\\RegistrationFormType'] = new \App\Customers\Infrastructure\Symfony\Form\RegistrationFormType();
    }
}
