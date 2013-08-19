<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Message;

use TheMountain\MainBundle\Controller\InstagramController;
use TheMountain\MainBundle\Controller\PhotosController;
use TheMountain\MainBundle\Entity\Contact;
use TheMountain\MainBundle\Form\ContactType;
use TheMountain\MainBundle\Entity\SongRequest;
use TheMountain\MainBundle\Form\SongRequestType;

class PageController extends Controller
{
    public function indexAction()
    {
        //get instagram snapwidget
        $Instagram = new InstagramController();
        $Instagram->setContainer($this->container);
        $sw = $Instagram->snapwidget();
        
        return $this->render('TheMountainMainBundle:Page:index.html.twig', array(
            'display_blockA' => $sw[0],
            'display_blockB' => $sw[1]
        ));
    }
    
    public function contactAction()
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                if($contact->getFeedme() === null){
                    //not spam
                    $message = \Swift_Message::newInstance()
                        ->setSubject('93-9 The Mountain | Contact Form')
                        ->setFrom($contact->getEmail())
                        ->setReplyTo($contact->getEmail())
                        ->setTo($this->container->getParameter('themountain.emails.contact_email'))
                        ->setBody($this->renderView('TheMountainMainBundle:Email:contact.txt.twig', array('contact' => $contact)));
                    $this->get('mailer')->send($message);

                    $this->get('session')->getFlashBag()->add('contactnotice', 'Successfully sent!');

                    //redirect - important to prevent repost from page refresh
                    return $this->redirect($this->generateUrl('TheMountainMainBundle_contact'));
                    
                } else {
                    // spam - exit but don't send email and don't show managers page
                    return $this->redirect($this->generateUrl('TheMountainMainBundle_contact'));
                }
            }
        }
        return $this->render('TheMountainMainBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function onairAction()
    {
        return $this->render('TheMountainMainBundle:Page:onair.html.twig');
    }
    
    public function songrequestAction()
    {
        $songrequest = new SongRequest();
        $form = $this->createForm(new SongRequestType(), $songrequest);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                //send
                $message = \Swift_Message::newInstance()
                    ->setSubject('93-9 The Mountain | Song Request')
                    ->setFrom($songrequest->getEmail())
                    ->setReplyTo($songrequest->getEmail())
                    ->setTo($this->container->getParameter('themountain.emails.song_request_email'))
                    ->setBody($this->renderView('TheMountainMainBundle:Email:songrequest.txt.twig', array('songrequest' => $songrequest)));
                $this->get('mailer')->send($message);
                
                $this->get('session')->getFlashBag()->add('songnotice', 'Successfully sent!');
                 
                //redirect - important to prevent repost from page refresh
                return $this->redirect($this->generateUrl('TheMountainMainBundle_song_request'));
                }
        }

        return $this->render('TheMountainMainBundle:Page:songrequest.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function photosAction()
    {
        $Photos = new PhotosController();
        $Photos->setContainer($this->container);
        $photo_block = $Photos->showPhotos();
        
        return $this->render('TheMountainMainBundle:Page:photos.html.twig', array(
            'display_block' => $photo_block
        ));
    }
    
    public function concertsAction()
    {
        return $this->render('TheMountainMainBundle:Page:concerts.html.twig');
    }
    
    public function communityAction()
    {
        return $this->render('TheMountainMainBundle:Page:community.html.twig');
    }
        
    public function whatsAction()
    {
        return $this->render('TheMountainMainBundle:Page:whats.html.twig');
    }

    public function jobsAction()
    {
        return $this->render('TheMountainMainBundle:Page:jobs.html.twig');
    }

    public function weatherAction()
    {
        return $this->render('TheMountainMainBundle:Page:weather.html.twig');
    }

    
    public function testAction()
    {
        return $this->render('TheMountainMainBundle:Page:test.html.twig');
    }
    
    public function newsAction()
    {
        $newsSource = "";
        $newsUrl = "";
        include_once('inc/newsFeeds.php');
        return $this->render('TheMountainMainBundle:Page:news.html.twig', array(
            'newsSource' => $newsSource,
            'newsUrl' => $newsUrl,
        ));
    }
    
    // redirect
    //public function contact2Action(){
        //return $this->redirect($this->generateUrl('TheMountainMainBundle_contact'), 301);
    //}
}
?>
