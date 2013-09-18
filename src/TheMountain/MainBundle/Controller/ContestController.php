<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use TheMountain\MainBundle\Entity\FreeLunch;
use TheMountain\MainBundle\Form\FreeLunchType;
use TheMountain\MainBundle\Entity\SendLink;
use TheMountain\MainBundle\Form\SendLinkType;

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
                
            // LIKE YOUR WAY TO MAUI
            case 'like-your-way-to-maui' :  
                return $this->render('TheMountainMainBundle:Contest:maui2013.html.twig', array(
                    'contest' => $contest
                ));
            
             // FOREIGNER CHOIR
            case 'foreigner-choir-contest' :
                $sendlink = new SendLink();
                $form = $this->createForm(new SendLinkType(), $sendlink);

                $request = $this->getRequest();
                if ($request->getMethod() == 'POST') {
                    $form->bind($request);

                    if ($form->isValid()) {
                        //send
                        $message = \Swift_Message::newInstance()
                            ->setSubject('93-9 The Mountain | Foreigner Choir Contest Entry')
                            ->setFrom($sendlink->getEmail())
                            ->setReplyTo($sendlink->getEmail())
                            ->setTo($this->container->getParameter('themountain.emails.contest_email'))
                            ->setBody($this->renderView('TheMountainMainBundle:Email:foreignerchoir.txt.twig', array('sendlink' => $sendlink)));
                        $this->get('mailer')->send($message);

                        $this->get('session')->getFlashBag()->add('sendlinknotice', 'Your choir is submitted!  Thank you for entering!!');

                        //redirect - important to prevent repost from page refresh
                        return $this->redirect($this->generateUrl('TheMountainMainBundle_contest', array('contest'=>'foreigner-choir-contest')));
                        }
                }
                return $this->render('TheMountainMainBundle:Contest:foreignerchoir.html.twig', array(
                    'form' => $form->createView(),
                    'contest' => $contest,
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
        public function fcc1Action()
    {
            return $this->render('TheMountainMainBundle:Contest:foreignerchoir1.html.twig');
     }
     
    public function fcc2Action()
    {
            return $this->render('TheMountainMainBundle:Contest:foreignerchoir2.html.twig');
     }
}
?>
