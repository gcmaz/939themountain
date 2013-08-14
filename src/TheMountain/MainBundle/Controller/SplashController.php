<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SplashController extends Controller
{
    public function splashAction($splash)
    {
        switch($splash){
            // DEFAULT
            case 'default' :
                return $this->render('TheMountainMainBundle:Splash:default.html.twig', array(
                    'splash' => $splash
                ));

            // COCO CO FAIR
            case 'coconino-county-fair' :
                return $this->render('TheMountainMainBundle:Splash:cocofair.html.twig', array(
                    'splash' => $splash
                ));
                
            // 4TH JULY PARADE
            case '4th-july-parade' :
                return $this->render('TheMountainMainBundle:Splash:4thjulyparade.html.twig', array(
                    'splash' => $splash
                ));
        }
    }
}
?>