<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class SplashController extends Controller
{
    public function splashAction($splash)
    {
        // DEFAULT
        if ($splash == 'default'){
            return $this->render('TheMountainMainBundle:Page:splashpage.html.twig', array(
                'splash' => $splash
            ));
        
        // 4TH JULY PARADE
        } else if ($splash == '4th-july-parade'){
            return $this->render('TheMountainMainBundle:Splash:4thjulyparade.html.twig', array(
                'splash' => $splash
            ));
        }
    }
}
?>

