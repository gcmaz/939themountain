<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class NewsController extends Controller
{
    public function newsAction($news)
    {
        return $this->render('TheMountainMainBundle:Page:contest.html.twig', array(
            'news' => $news
        ));
    }
    
}
?>
