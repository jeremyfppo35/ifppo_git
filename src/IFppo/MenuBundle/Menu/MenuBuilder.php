<?php

namespace IFppo\MenuBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Description of MenuBuilder
 *
 * @author jeremy.denieul
 */
class MenuBuilder extends ContainerAware {

    /**
     * Génération du menu
     * @param \Knp\Menu\FactoryInterface $factory
     * @param array $options
     * @return type
     */
    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');

        // Commerce
        $menu->addChild('Commerce', array('route' => ''))
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-list');
        $menu['Commerce']->addChild('Stats', array('route' => 'commerce_stats'))
                ->setAttribute('icon', 'icon-edit');
        $menu['Commerce']->addChild('Graphs', array('route' => 'commerce_graphs'))
                ->setAttribute('icon', 'icon-edit');
        $menu['Commerce']->addChild('Historique Komilfo', array('route' => 'commerce_historique_komilfo'))
                ->setAttribute('icon', 'icon-edit');        
        $menu['Commerce']->addChild('Historique Tradi', array('route' => 'commerce_historique_tradi'))
                ->setAttribute('icon', 'icon-edit'); 
        // Technique
        $menu->addChild('Technique', array('route' => ''))
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-list');   
        $menu['Technique']->addChild('Stats', array('route' => 'technique_stats'))
                ->setAttribute('icon', 'icon-edit');
        
        // Previsionnel
        $menu->addChild('Previsionnel', array('route' => 'previsionnel', 
                        'routeParameters' => array('etat' => 0)))
                ->setAttribute('icon', 'icon-edit');    
        // Prod
        $menu->addChild('Production', array('route' => ''))
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-list'); 
        $menu['Production']->addChild('Prévisionnel', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit'); 
        $menu['Production']->addChild('En cours', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit'); 
        $menu['Production']->addChild('Terminé', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit');          
        // Transport
        $menu->addChild('Transport', array('route' => ''))
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-list');   
        $menu['Transport']->addChild('Prévisionnel', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit'); 
        $menu['Transport']->addChild('En cours', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit'); 
        $menu['Transport']->addChild('Terminé', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit');  
        
        // Facturation
        $menu->addChild('Facturation', array('route' => ''))
                ->setAttribute('dropdown', true)
                ->setAttribute('icon', 'icon-list');   
        $menu['Facturation']->addChild('Prévisionnel', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit'); 
        $menu['Facturation']->addChild('En cours', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit'); 
        $menu['Facturation']->addChild('Terminé', array('route' => 'test'))
                ->setAttribute('icon', 'icon-edit');          
        
        $menu->addChild('Scan', array('route' => 'scan'))
                ->setAttribute('icon', 'icon-edit'); 
        
        $menu->addChild('Recherche', array('route' => 'scan'))
                ->setAttribute('icon', 'icon-edit');          
                
        $menu->addChild('Deconnexion', array('route' => 'fos_user_security_logout'))
                ->setAttribute('icon', 'icon-signout');   

        return $menu;
    }

}

?>
