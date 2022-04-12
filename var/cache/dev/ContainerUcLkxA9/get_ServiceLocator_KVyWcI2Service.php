<?php

namespace ContainerUcLkxA9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KVyWcI2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kVyWcI2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kVyWcI2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messageRepository' => ['privates', 'App\\Repository\\MessageRepository', 'getMessageRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'messageRepository' => 'App\\Repository\\MessageRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
