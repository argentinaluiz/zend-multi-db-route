<?php

namespace Application\Controller;

use Application\Model\PostTable;
use Interop\Container\ContainerInterface;

class IndexControllerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $postTable = $container->get(PostTable::class);
        return new IndexController($postTable);
    }


}