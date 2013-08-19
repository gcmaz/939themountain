<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InstagramController extends Controller
{
    public function snapwidget(){
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
        
        return array(
            $display_blockA,
            $display_blockB,
        );
    }
}
?>