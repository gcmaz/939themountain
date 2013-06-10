<?php

    $newsSource = "";
    $newsUrl = "";
    if(isset($_GET['n'])){
            $nVar = $_GET['n'];
    }
    $nVar = "dailysun";
    switch($nVar){
            case "dailysun" :
                    $newsSource = "Arizona Daily Sun News Feed";
                    $newsUrl = "http://news.yahoo.com/rss/local/provider/12794772/arizona-daily-sun-1313336";
                    break;
            case "fox" :
                    $newsSource = "Fox 10 Phoenix News Feed";
                    $newsUrl = "http://news.yahoo.com/rss/local/provider/12794772/fox-10-phoenix-16158095";
                    break;
            case "sedona" :
                    $newsSource = "Sedona Red Rock News Feed";
                    $newsUrl = "http://news.yahoo.com/rss/local/provider/12794772/sedona-red-rock-news-9101791";
                    break;
            case "williams" :
                    $newsSource = "Williams News Feed";
                    $newsUrl = "http://williamsnews.com/1_rss.xml";
                    break;
            case "prescott" :
                    $newsSource = "Prescott Daily Courier News Feed";
                    $newsUrl = "http://www.prescottaz.com/1_rss.xml";
                    break;
            case "aptop" :
                    $newsSource = "Associated Press Top Headlines";
                    $newsUrl = "http://hosted.ap.org/lineups/TOPHEADS.rss?SITE=AP&SECTION=HOME";
                    break;
            case "abc15flag" :
                    $newsSource = "ABC 15 Flagstaff";
                    $newsUrl = "http://www.abc15.com/feeds/rssFeed?siteId=10008&obfType=RSS_FEED&categoryId=30524";
                    break;
            case "abc15pres" :
                    $newsSource = "ABC 15 Prescott/Prescott Valley";
                    $newsUrl = "http://www.abc15.com/feeds/rssFeed?siteId=10008&obfType=RSS_FEED&categoryId=30528";
                    break;
            case "abc15naz" :
                    $newsSource = "ABC 15 Northern Arizona";
                    $newsUrl = "http://www.abc15.com/feeds/rssFeed?siteId=10008&obfType=RSS_FEED&categoryId=30526";
                    break;
            case "rolstone" :
                    $newsSource = "Rolling Stone Music News Feed";
                    $newsUrl = "http://www.rollingstone.com/siteServices/rss/musicNewsAndFeature";
                    break;
            default :
                    $newsSource = "Arizona Daily Sun News Feed";
                    $newsUrl = "http://news.yahoo.com/rss/local/provider/12794772/arizona-daily-sun-1313336";
                    break;
    }

?>
