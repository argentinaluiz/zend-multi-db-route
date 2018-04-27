<?php

namespace Application\Db;


use Interop\Container\ContainerInterface;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\AdapterServiceFactory;
use Zend\Router\Http\RouteMatch;

class MyAdapterFactory extends AdapterServiceFactory
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $router = $container->get('router');
        $request = $container->get('request');

        /** @var RouteMatch $routeMatch */
        $routeMatch = $router->match($request);
        $clientParam = $routeMatch->getParam('client');
        $config = $container->get('config');
        return new Adapter($config['db']['adapters'][$clientParam]);
    }

}