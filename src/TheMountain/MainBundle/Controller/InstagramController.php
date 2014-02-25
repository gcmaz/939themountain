<?php

namespace TheMountain\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InstagramController extends Controller
{
    public function snapwidget(){
        // snapwidget.com hashtags
        // ---- random bands
        $a = array(
                1 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#metallica</p><iframe src=\"http://snapwidget.com/sl/?h=bWV0YWxsaWNhfGlufDEyNXwyfDN8fG5vfDV8bm9uZQ==\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                2 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#aerosmith</p><iframe src=\"http://snapwidget.com/sl/?h=YWVyb3NtaXRofGlufDEyNXwzfDN8fG5vfDV8bm9uZXxvblN0YXJ0fHllcw==&v=25214\" title=\"Instagram Widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height:130px\"></iframe>",
                3 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#pinkfloyd</p><iframe src=\"http://snapwidget.com/sl/?h=cGlua2Zsb3lkfGlufDEyNXwzfDN8fG5vfDV8bm9uZXxvblN0YXJ0fHllcw==&v=25214\" title=\"Instagram Widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height:130px\"></iframe>",
                4 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#motleycrue</p><iframe src=\"http://snapwidget.com/sl/?h=bW90bGV5Y3J1ZXxpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                5 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#therollingstones</p><iframe src=\"http://snapwidget.com/sl/?h=dGhlcm9sbGluZ3N0b25lc3xpbnwxMjV8M3wzfHxub3w1fG5vbmV8b25TdGFydHx5ZXM=&v=25214\" title=\"Instagram Widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height:130px\"></iframe>",
                6 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#ledzeppelin</p><iframe src=\"http://snapwidget.com/sl/?h=bGVkemVwcGVsaW58aW58MTI1fDJ8M3x8bm98NXxub25l\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                7 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#vanhalen</p><iframe src=\"http://snapwidget.com/sl/?h=dmFuaGFsZW58aW58MTI1fDJ8M3x8bm98NXxub25l\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                8 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#gunsnroses</p><iframe src=\"http://snapwidget.com/sl/?h=Z3Vuc25yb3Nlc3xpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                9 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#acdc</p><iframe src=\"http://snapwidget.com/sl/?h=YWNkY3xpbnwxMjV8MnwzfHxub3w1fG5vbmU=\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>"
        );
        // -- random other
        $b = array(
                1 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#rocknroll</p><iframe src=\"http://snapwidget.com/sl/?h=cm9ja25yb2xsfGlufDEyNXwyfDN8fG5vfDV8bm9uZQ==\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                2 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#rockerchicks</p><iframe src=\"http://snapwidget.com/sl/?h=cm9ja2VyY2hpY2tzfGlufDEyNXwyfDN8fG5vfDV8bm9uZQ==\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>",
                3 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#classicrock</p><iframe src=\"http://snapwidget.com/sl/?h=Y2xhc3NpY3JvY2t8aW58MTI1fDN8M3x8bm98NXxub25lfG9uU3RhcnR8eWVz&v=25214\" title=\"Instagram Widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height:130px\"></iframe>",
                4 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#80srock</p><iframe src=\"http://snapwidget.com/sl/?h=ODBzcm9ja3xpbnwxMjV8M3wzfHxub3w1fG5vbmV8b25TdGFydHx5ZXM=&v=25214\" title=\"Instagram Widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height:130px\"></iframe>",
                5 => "<p style=\"color:#999;font-size:10px;font-weight:bold;\">#70srock</p><iframe src=\"http://snapwidget.com/sl/?h=NzBzcm9ja3xpbnwxMjV8M3wzfHxub3w1fG5vbmV8b25TdGFydHx5ZXM=&v=25214\" title=\"Instagram Widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height:130px\"></iframe>",
        );
        // generate random
        $randA = mt_rand(1,9);
        $randB = mt_rand(1,5);
        $display_blockA = $a[$randA];
        $display_blockB = $b[$randB];
        
        return array(
            $display_blockA,
            $display_blockB,
        );
    }
}
?>