<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TheMountain\MainBundle\Entity\Concert;
use TheMountain\MainBundle\Entity\Repository\ConcertRepository;

class ConcertController extends Controller
{    
    public function showAction(){ 
        $entities = $this->getConcertDetails();
        return $this->render('TheMountainMainBundle:Page:concerts.html.twig', array(
            'entities' => $entities,
        ));
    }
  
    private function getConcertRepository() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('TheMountainMainBundle:Concert');
        if(!$entities){
            //throw $this->createNotFoundException('Unable to gather data');
            $entities = '';
        }
        return  $entities;
    }
    
    private function getConcertDetails() {
        $entities = $this->getConcertRepository()->getConcert();
            if(!$entities){
                //throw $this->createNotFoundException('Unable to find any concert data');
                $entities = '';
            }
        return $entities;
    }
                
}
?>