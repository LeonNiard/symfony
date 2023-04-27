<?php

namespace ContainerDK4Mky0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Default_Middleware_HandleMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.bus.default.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/HandleMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocator.php';

        $container->privates['messenger.bus.default.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(new \Symfony\Component\Messenger\Handler\HandlersLocator(['App\\Customers\\Application\\Message\\UserRegistration' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.YQknIUg'] ?? $container->load('get_Messenger_HandlerDescriptor_YQknIUgService'));
            yield 1 => ($container->privates['.messenger.handler_descriptor.B5FZGoG'] ?? $container->load('get_Messenger_HandlerDescriptor_B5FZGoGService'));
            yield 2 => ($container->privates['.messenger.handler_descriptor.86_Qxyx'] ?? $container->load('get_Messenger_HandlerDescriptor_86QxyxService'));
            yield 3 => ($container->privates['.messenger.handler_descriptor.rjbE1WL'] ?? $container->load('get_Messenger_HandlerDescriptor_RjbE1WLService'));
            yield 4 => ($container->privates['.messenger.handler_descriptor.2oRxske'] ?? $container->load('get_Messenger_HandlerDescriptor_2oRxskeService'));
            yield 5 => ($container->privates['.messenger.handler_descriptor.sQ4R5fa'] ?? $container->load('get_Messenger_HandlerDescriptor_SQ4R5faService'));
        }, 6), 'App\\Customers\\Application\\Message\\FindUserQuery' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.h3IyBeo'] ?? $container->load('get_Messenger_HandlerDescriptor_H3IyBeoService'));
        }, 1), 'Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.tGvt0LH'] ?? $container->load('get_Messenger_HandlerDescriptor_TGvt0LHService'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.vMw0m61'] ?? $container->load('get_Messenger_HandlerDescriptor_VMw0m61Service'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.XZowc.T'] ?? $container->load('get_Messenger_HandlerDescriptor_XZowc_TService'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\PushMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.Lml2ICs'] ?? $container->load('get_Messenger_HandlerDescriptor_Lml2ICsService'));
        }, 1)]), false);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}