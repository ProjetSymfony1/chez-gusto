<?php

namespace ContainerUcLkxA9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nt1q1YkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Nt1q1Yk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Nt1q1Yk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartRepository' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', true],
            'dishRepository' => ['privates', 'App\\Repository\\DishRepository', 'getDishRepositoryService', true],
        ], [
            'cartRepository' => 'App\\Repository\\CartRepository',
            'dishRepository' => 'App\\Repository\\DishRepository',
        ]);
    }
}
