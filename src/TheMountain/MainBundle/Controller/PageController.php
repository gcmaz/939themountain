<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TheMountain\MainBundle\Entity\Contact;
use TheMountain\MainBundle\Form\ContactType;
use TheMountain\MainBundle\Entity\SongRequest;
use TheMountain\MainBundle\Form\SongRequestType;

class PageController extends Controller
{
    public function indexAction()
    {
        // snapwidget.com hashtags
        // ---- random local 
        $a = array(
                1 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#metallica</p><iframe src=\"http://snapwidget.com/sl/?h=bWV0YWxsaWNhfGlufDEyNXwyfDN8fG5vfDV8bm9uZQ==\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                2 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#soundgarden</p><iframe src=\"http://snapwidget.com/sl/?h=c291bmRnYXJkZW58aW58MTI1fDJ8M3x8bm98NXxub25l\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                3 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#aliceinchains</p><iframe src=\"http://snapwidget.com/sl/?h=YWxpY2VpbmNoYWluc3xpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                4 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#motleycrue</p><iframe src=\"http://snapwidget.com/sl/?h=bW90bGV5Y3J1ZXxpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                5 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#foofighters</p><iframe src=\"http://snapwidget.com/sl/?h=Zm9vZmlnaHRlcnN8aW58MTI1fDJ8M3x8bm98NXxub25l\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                6 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#nirvana</p><iframe src=\"http://snapwidget.com/sl/?h=bmlydmFuYXxpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                7 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#ledzeppelin</p><iframe src=\"http://snapwidget.com/sl/?h=bGVkemVwcGVsaW58aW58MTI1fDJ8M3x8bm98NXxub25l\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                8 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#vanhalen</p><iframe src=\"http://snapwidget.com/sl/?h=dmFuaGFsZW58aW58MTI1fDJ8M3x8bm98NXxub25l\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                9 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#gunsnroses</p><iframe src=\"http://snapwidget.com/sl/?h=Z3Vuc25yb3Nlc3xpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                10 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#acdc</p><iframe src=\"http://snapwidget.com/sl/?h=YWNkY3xpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>"
        );
        // -- random rock, girls
        $b = array(
                1 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#rocknroll</p><iframe src=\"http://snapwidget.com/sl/?h=cm9ja25yb2xsfGlufDEyNXwyfDN8fG5vfDV8bm9uZQ==\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                2 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#rockerchicks</p><iframe src=\"http://snapwidget.com/sl/?h=cm9ja2VyY2hpY2tzfGlufDEyNXwyfDN8fG5vfDV8bm9uZQ==\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                3 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#rockconcerts</p><iframe src=\"http://snapwidget.com/sl/?h=cm9ja2NvbmNlcnRzfGlufDEyNXwyfDN8fG5vfDV8bm9uZQ==\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                4 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#chickswithtattoos</p><iframe src=\"http://snapwidget.com/sl/?h=Y2hpY2tzd2l0aHRhdHRvb3N8aW58MTI1fDJ8M3x8bm98NXxub25l\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                5 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#girlswithtats</p><iframe src=\"http://snapwidget.com/sl/?h=Z2lybHN3aXRodGF0c3xpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",            
                6 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#inkedgirls</p><iframe src=\"http://snapwidget.com/sl/?h=aW5rZWRnaXJsc3xpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                7 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#inkedbabes</p><iframe src=\"http://snapwidget.com/sl/?h=aW5rZWRiYWJlc3xpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
        );
        // generate random
        $randA = mt_rand(1,10);
        $randB = mt_rand(1,7);
        $display_blockA = $a[$randA];
        $display_blockB = $b[$randB];
        
        return $this->render('TheMountainMainBundle:Page:index.html.twig', array(
            'display_blockA' => $display_blockA,
            'display_blockB' => $display_blockB
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
        $display_block = "";
        $photos_page_url = $this->generateUrl('TheMountainMainBundle_photos');

        if(isset($_GET['a'])){
                $a = $_GET['a'];
                $display_block = "
                        <a href=\"$photos_page_url\" style=\"font-size:16px;margin:0 auto 5px;\">&laquo; Back To Albums</a><br/>
                        <div id=\"galleria\"></div>
                        <script type=\"text/javascript\" charset=\"UTF-8\" >
                        Galleria.loadTheme('/scripts/galleria/themes/classic/galleria.classic.js');
                        Galleria.run('#galleria', {
                         facebook: 'album:$a',
                         width: 660,
                         height: 550,
                         lightbox: true,
                         debug: false
                        });
                        </script>
                ";
        } else {
                $display_block = "
                        <h1>Select A Gallery:</h1>
                        <p><a href=\"$photos_page_url?a=10151651730908514\">
                                    Grace Potter Pre-Show Party Giveaways 6-12-13
                        </a></p>
                        <p><a href=\"$photos_page_url?a=10151602862538514\">
                                    Battle Of The Bands 5-18-13
                        </a></p>
                        <p><a href=\"$photos_page_url?a=10151577423538514\">
                                    Whiskey Row Marathon 5-4-13
                        </a></p>
                        <p><a href=\"$photos_page_url?a=10151466818343514\">
                                    Special Olympics Polar Plunge 3-2-13
                        </a></p>
                        <p><a href=\"$photos_page_url?a=10151556446183514\">
                                   KISS Alive Concert 4-20-13
                        </a></p>
                        <p><a href=\"$photos_page_url?a=446824705388092\">
                                   Dew Downtown Flagstaff 2013
                        </a></p>
                        <p><a href=\"$photos_page_url?a=10151421530763514\">
                                   Kahtoola Uphill Event 2-9-13
                       </a></p>
                       <p><a href=\"$photos_page_url?a=10151348592803514\">
                                   7 Ate 9 At Work Lunch Giveaways
                       </a></p>
                        ";
        }
        return $this->render('TheMountainMainBundle:Page:photos.html.twig', array(
            'display_block' => $display_block
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
