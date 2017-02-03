<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="home")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        if($user) {
            return $this->render('TestBundle:Default:index.html.twig',array(''
            . 'user' => $user));
        }
        else 
            return $this->render('TestBundle:Default:index.html.twig');
    }
    
    
}
