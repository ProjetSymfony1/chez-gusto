<?php

namespace Container08Db6DY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QMnY7LWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QMnY7LW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QMnY7LW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dishRepository' => ['privates', 'App\\Repository\\DishRepository', 'getDishRepositoryService', true],
        ], [
            'dishRepository' => 'App\\Repository\\DishRepository',
        ]);
    }
}
