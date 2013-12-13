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
                
            // BOOT DROP
            case 'boot-drop-prescott-2014' :
                return $this->render('TheMountainMainBundle:Splash:bootdrop.html.twig', array(
                    'splash' => $splash
                )); 
                
                // NORTHER LIGHTS HOLIDAY PARADE
            case 'northern-lights-holiday-parade' :
                return $this->render('TheMountainMainBundle:Splash:NorLightsHolidayParade.html.twig', array(
                    'splash' => $splash
                )); 

            // GIFT OF WARMTH
            case 'gift-of-warmth-coat-drive' :
                return $this->render('TheMountainMainBundle:Splash:giftofwarmth.html.twig', array(
                    'splash' => $splash
                )); 
                
                // TEACHERS APPRECIATION NIGHT
            case 'teachers-appreciation-night' :
                return $this->render('TheMountainMainBundle:Splash:teachersnight.html.twig', array(
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