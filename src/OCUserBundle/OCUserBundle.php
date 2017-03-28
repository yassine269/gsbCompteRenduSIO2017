<?php

namespace OCUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use OCUserBundle\DependencyInjection\Security\Factory\WsseFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OCUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new WsseFactory());
    }
}
