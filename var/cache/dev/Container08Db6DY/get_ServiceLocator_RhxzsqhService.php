<?php

namespace Container08Db6DY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RhxzsqhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rhxzsqh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rhxzsqh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\FavoriteController::addFav' => ['privates', '.service_locator.CpYXYDY', 'get_ServiceLocator_CpYXYDYService', true],
            'App\\Controller\\FavoriteController::delFav' => ['privates', '.service_locator.ShvcuJq', 'get_ServiceLocator_ShvcuJqService', true],
            'App\\Controller\\FavoriteController::menu' => ['privates', '.service_locator.c5HshjL', 'get_ServiceLocator_C5HshjLService', true],
            'App\\Controller\\HomepageController::menu' => ['privates', '.service_locator.QMnY7LW', 'get_ServiceLocator_QMnY7LWService', true],
            'App\\Controller\\MenuController::add' => ['privates', '.service_locator..ALD__g', 'get_ServiceLocator__ALDGService', true],
            'App\\Controller\\MenuController::menu' => ['privates', '.service_locator.QMnY7LW', 'get_ServiceLocator_QMnY7LWService', true],
            'App\\Controller\\MessageController::message' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.Dbqq6dv', 'get_ServiceLocator_Dbqq6dvService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController::register' => ['privates', '.service_locator.Dbqq6dv', 'get_ServiceLocator_Dbqq6dvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\FavoriteController:addFav' => ['privates', '.service_locator.CpYXYDY', 'get_ServiceLocator_CpYXYDYService', true],
            'App\\Controller\\FavoriteController:delFav' => ['privates', '.service_locator.ShvcuJq', 'get_ServiceLocator_ShvcuJqService', true],
            'App\\Controller\\FavoriteController:menu' => ['privates', '.service_locator.c5HshjL', 'get_ServiceLocator_C5HshjLService', true],
            'App\\Controller\\HomepageController:menu' => ['privates', '.service_locator.QMnY7LW', 'get_ServiceLocator_QMnY7LWService', true],
            'App\\Controller\\MenuController:add' => ['privates', '.service_locator..ALD__g', 'get_ServiceLocator__ALDGService', true],
            'App\\Controller\\MenuController:menu' => ['privates', '.service_locator.QMnY7LW', 'get_ServiceLocator_QMnY7LWService', true],
            'App\\Controller\\MessageController:message' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.Dbqq6dv', 'get_ServiceLocator_Dbqq6dvService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController:register' => ['privates', '.service_locator.Dbqq6dv', 'get_ServiceLocator_Dbqq6dvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\FavoriteController::addFav' => '?',
            'App\\Controller\\FavoriteController::delFav' => '?',
            'App\\Controller\\FavoriteController::menu' => '?',
            'App\\Controller\\HomepageController::menu' => '?',
            'App\\Controller\\MenuController::add' => '?',
            'App\\Controller\\MenuController::menu' => '?',
            'App\\Controller\\MessageController::message' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\FavoriteController:addFav' => '?',
            'App\\Controller\\FavoriteController:delFav' => '?',
            'App\\Controller\\FavoriteController:menu' => '?',
            'App\\Controller\\HomepageController:menu' => '?',
            'App\\Controller\\MenuController:add' => '?',
            'App\\Controller\\MenuController:menu' => '?',
            'App\\Controller\\MessageController:message' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
