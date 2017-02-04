<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Response;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Imagine\Imagick\Imagine;
use Imagine\Image\ImageInterface;

class DefaultController extends Controller {

    /**
     * @Route("/",name="home")
     */
    public function indexAction() {
        $user = $this->getUser();
        if ($user) {
            return $this->render('TestBundle:Default:index.html.twig', array(''
                        . 'user' => $user));
        } else
            return $this->render('TestBundle:Default:index.html.twig');
    }

    /**
     * @Route("/image", name="image")
     */
    public function editImage() {
        $imagine = new \Imagine\Gd\Imagine();
        $size = new \Imagine\Image\Box(400, 300);
        $palette = new \Imagine\Image\Palette\RGB();

        $color = $palette->color('#000', 100);
        $img = $imagine->create($size, $color);
        return $this->render('TestBundle:Default:image.html.twig', array(''
                    . 'image' => $img));
    }

}
