<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 11/03/2017
 * Time: 19:17
 */

namespace MainBundle\EventListener;

use Sonata\AdminBundle\Event\ConfigureMenuEvent;

class MenuBuilderListener
{
    public function addMenuItems(ConfigureMenuEvent $event)
    {
        $menu = $event->getMenu();

        $child = $menu->addChild('reports', [
            'label' => 'Daily and monthly reports',
            'route' => 'main_homepage_visiteur',
        ]);
    }
}