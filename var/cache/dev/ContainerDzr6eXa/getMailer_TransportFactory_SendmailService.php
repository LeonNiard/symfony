<?php

namespace ContainerDzr6eXa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_SendmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/SendmailTransportFactory.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['mailer.transport_factory.sendmail'])) {
            return $container->privates['mailer.transport_factory.sendmail'];
        }

        return $container->privates['mailer.transport_factory.sendmail'] = new \Symfony\Component\Mailer\Transport\SendmailTransportFactory($a, ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
