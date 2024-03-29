<?php

namespace ContainerEZkRNZF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNFTCreationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NFTCreationController' shared autowired service.
     *
     * @return \App\Controller\NFTCreationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/NFTCreationController.php';

        $container->services['App\\Controller\\NFTCreationController'] = $instance = new \App\Controller\NFTCreationController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\NFTCreationController', $container));

        return $instance;
    }
}
