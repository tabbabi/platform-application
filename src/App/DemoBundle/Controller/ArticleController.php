<?php

namespace App\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ArticleController
 *
 * @author nour
 */
class ArticleController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('AppDemoBundle:Article:index.html.twig', array(
            'entity_class' => $this->get('oro_entity_config.provider.app')
        ));
        
    }
}
