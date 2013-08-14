<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use TheMountain\MainBundle\Entity\FreeLunch;
use TheMountain\MainBundle\Form\FreeLunchType;

class ContestController extends Controller
{
    public function contestAction($contest)
    {
        switch($contest){
            // default
            case 'default' :
                return $this->render('TheMountainMainBundle:Contest:default.html.twig', array(
                    'contest' => $contest
                ));
                
            //DAILY BRIBE
            case 'daily-bribe' :
                return $this->render('TheMountainMainBundle:Contest:dailybribe.html.twig', array(
                    'contest' => $contest
                ));
                
            // FREE LUNCH
            case 'free-lunch' :
                $freelunch = new FreeLunch();
                $form = $this->createForm(new FreeLunchType(), $freelunch);

                $request = $this->getRequest();
                if ($request->getMethod() == 'POST') {
                    $form->bind($request);

                    if ($form->isValid()) {
                        //send
                        $message = \Swift_Message::newInstance()
                            ->setSubject('93-9 The Mountain | Free Lunch Entry')
                            ->setFrom($freelunch->getEmail())
                            ->setReplyTo($freelunch->getEmail())
                            ->setTo($this->container->getParameter('themountain.emails.freelunch_email'))
                            ->setBody($this->renderView('TheMountainMainBundle:Email:freelunch.txt.twig', array('freelunch' => $freelunch)));
                        $this->get('mailer')->send($message);

                        $this->get('session')->getFlashBag()->add('freelunchnotice', 'Your office is entered!  Thank you for playing!!');

                        //redirect - important to prevent repost from page refresh
                        return $this->redirect($this->generateUrl('TheMountainMainBundle_contest', array('contest'=>'free-lunch')));
                        }
                }
                return $this->render('TheMountainMainBundle:Contest:freelunch.html.twig', array(
                    'form' => $form->createView(),
                    'contest' => $contest,
                    'status' => 'dead'
                ));

        }
    }
}
?>
