<?php
    // for photos page, NOT homepage snapwidget
    $display_block = "";
    $photos_page_url = $this->generateUrl('TheMountainMainBundle_photos');
    //$photos_page_url = "/photos/flagstaff/prescott"; // -- UPDATE IF PATH TO PAGE CHANGES
    //$pageUrl = $_SERVER['PHP_SELF'];
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
                    <p><a href=\"$photos_page_url?a=10151466818343514\">
                                Special Olympics Polar Plunge 3-2-13
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
    return $display_block;
?>