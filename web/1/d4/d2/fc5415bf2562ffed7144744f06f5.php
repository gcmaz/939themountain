<?php

/* TheMountainMainBundle::layout.html.twig */
class __TwigTemplate_d4d2fc5415bf2562ffed7144744f06f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'favicons' => array($this, 'block_favicons'),
            'styles' => array($this, 'block_styles'),
            'ie_crap' => array($this, 'block_ie_crap'),
            'js_top' => array($this, 'block_js_top'),
            'analytics' => array($this, 'block_analytics'),
            'leftcol_logo' => array($this, 'block_leftcol_logo'),
            'leftcol_sponsor' => array($this, 'block_leftcol_sponsor'),
            'leftcol_nav' => array($this, 'block_leftcol_nav'),
            'leftcol_mc' => array($this, 'block_leftcol_mc'),
            'leftcol_fb' => array($this, 'block_leftcol_fb'),
            'stream_box' => array($this, 'block_stream_box'),
            'footer' => array($this, 'block_footer'),
            'js_btm' => array($this, 'block_js_btm'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "93.9 The Mountain - Northern Arizona Rock Radio";
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        // line 6
        echo "    <meta name=\"description\" content=\"93.9 The Mountain - Rock Music Radio for Northern Arizona, Flagstaff, Prescott, Sedona, Williams\" />
";
    }

    // line 9
    public function block_keywords($context, array $blocks = array())
    {
        // line 10
        echo "    <meta name=\"keywords\" content=\"Flagstaff radio, Prescott radio, Northern Arizona Radio, rock, music\"  />
";
    }

    // line 13
    public function block_favicons($context, array $blocks = array())
    {
        // line 14
        echo "    <link rel=\"apple-touch-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <!--[if IE]><link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"><![endif]-->
    <!-- or, set /favicon.ico for IE10 win -->
    <meta name=\"msapplication-TileColor\" content=\"#151515\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
";
    }

    // line 22
    public function block_styles($context, array $blocks = array())
    {
        // line 23
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.tweet.css"), "html", null, true);
        echo "\" />
    <link href='http://fonts.googleapis.com/css?family=Wallpoet|Unica+One' rel='stylesheet' type='text/css'>
";
    }

    // line 28
    public function block_ie_crap($context, array $blocks = array())
    {
        // line 29
        echo "<!--[if gte IE 9]>
  <style type=\"text/css\">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
";
    }

    // line 41
    public function block_js_top($context, array $blocks = array())
    {
        // line 42
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/common.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 46
    public function block_analytics($context, array $blocks = array())
    {
        // line 47
        echo "    <script type=\"text/javascript\">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-38877504-1']);
        _gaq.push(['_setDomainName', 'gcmaz.com']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      </script>
";
    }

    // line 69
    public function block_leftcol_logo($context, array $blocks = array())
    {
        // line 70
        echo "        <div class=\"logo_box\">
            <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_homepage"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-939themountain.png"), "html", null, true);
        echo "\" width=\"262\" height=\"204\" alt=\"93-9 The Mountain - Rock Radio\" ></a>
        </div>
";
    }

    // line 75
    public function block_leftcol_sponsor($context, array $blocks = array())
    {
        // line 76
        echo "      <div class=\"sponsor_box\">
            <a href=\"http://www.nilescellular.com\" target=\"_blank\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sponsor_niles.png"), "html", null, true);
        echo "\" width=\"150\" height=\"90\" alt=\"Studio Sponsor\"/></a>
       </div>
";
    }

    // line 81
    public function block_leftcol_nav($context, array $blocks = array())
    {
        // line 82
        echo "        <nav class=\"menu_box\">
            <ul class=\"menu_left dropdown\">
                <li class=\"headlink\">
                    <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_homepage"), "html", null, true);
        echo "\">93.9</a>
                    <ul>
                        <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_homepage"), "html", null, true);
        echo "\">HOME</a></li>
                        <li><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_contact"), "html", null, true);
        echo "\">CONTACT US</a></li>
                        <li><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_advertise"), "html", null, true);
        echo "\">ADVERTISE</a></li>
                        <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">GREAT CIRCLE MEDIA</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"menu_right dropdown\">
                <li class=\"headlink\">
                    <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_onair"), "html", null, true);
        echo "\">MUSIC</a>
                    <ul>
                        <li><a href=\"javascript:void(window.open('http://player.tritondigital.com/8061', 'KMGNFM', 'width=800,height=600'));\">LISTEN LIVE &raquo;</a></li>
                        <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_onair"), "html", null, true);
        echo "\">ON THE AIR</a></li>
                        <li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_concerts"), "html", null, true);
        echo "\">CONCERTS</a></li>
                        <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_song_request"), "html", null, true);
        echo "\">SONG REQUESTS</a></li>
                        <li><a href=\"http://www.tunegenie.com/onair/kmgn/\" target=\"_blank\">PLAYLISTS</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"menu_left dropdown\">
                <li class=\"headlink\">
                    <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_community"), "html", null, true);
        echo "\">COMMUNITY</a>
                    <ul>
                        <li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_community"), "html", null, true);
        echo "\">COMMUNITY INFO</a></li>
                        <li><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_whats"), "html", null, true);
        echo "\">WHAT'S HAPPENING</a></li>
                        <!--li><a href=\"#\">NEWS</a></li-->
                        <li><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_photos"), "html", null, true);
        echo "\">PHOTOS</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"menu_right dropdown\">
                <li class=\"headlink\">
                    <a href=\"http://clubmountain.gcmaz.com\" target=\"_blank\">WIN STUFF</a>
                    <ul>
                        <li><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_contest", array("contest" => "daily-bribe")), "html", null, true);
        echo "\">Daily Bribe</a></li>
                        <li><a href=\"http://clubmountain.gcmaz.com\" target=\"_blank\">CLUB MOUNTAIN</a></li>
                        <!--li><a href=\"/\">CONTESTS</a></li-->
                        <li><a href=\"http://clubmountain.gcmaz.com/asp3/lwcodes.aspx\" target=\"_blank\">ROCK WORD</a></li>
                        ";
        // line 126
        echo "                    </ul>
                </li>
            </ul>
        </nav>
";
    }

    // line 132
    public function block_leftcol_mc($context, array $blocks = array())
    {
        // line 133
        echo "            <div class=\"music-ctr_box\">
                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/hdr-music-ctr.png"), "html", null, true);
        echo "\" width=\"300\" height=\"40\" alt=\"Music Center\" class=\"vertbtm\">
                <iframe name=\"store\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\" width=\"300\" height=\"410\" src=\"http://www.tunegenie.com/widehours/kmgn/410\"></iframe>
            </div>
";
    }

    // line 139
    public function block_leftcol_fb($context, array $blocks = array())
    {
        // line 140
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/hdr-friends.png"), "html", null, true);
        echo "\" width=\"300\" height=\"40\" alt=\"Friends\" class=\"vertbtm\">
            <div class=\"fb_box\">
               <div class=\"fb-like-box\" data-href=\"http://www.facebook.com/TheNew939\" data-width=\"300\" data-height=\"250\" data-show-faces=\"true\" data-colorscheme=\"dark\" data-stream=\"false\" data-border-color=\"black\" data-header=\"false\"></div>
            </div>
";
    }

    // line 146
    public function block_stream_box($context, array $blocks = array())
    {
        // line 147
        echo "    <div class=\"stream_box\">
            <a href=\"javascript:void(window.open('http://player.tritondigital.com/8061', 'KMGNFM', 'width=800,height=600'));\">
                <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/listen-live.png"), "html", null, true);
        echo "\" width=\"675\" height=\"75\" alt=\"Listen Live to 93.9 The Mountain Rock Radio\">
            </a>
        </div>
";
    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        // line 155
        echo "    <div id=\"ftr-left\">
            <ul class=\"ftr-links-list\">
            <li style=\"background-image:url('/images/ftr-icon-home.png');\"><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
            <li style=\"background-image:url('/images/ftr-icon-contact.png');\"><a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_contact"), "html", null, true);
        echo "\">Contact Us</a></li>
            <li style=\"background-image:url('/images/ftr-icon-listen.png');\"><a href=\"javascript:void(window.open('http://player.tritondigital.com/8061', 'KMGNFM', 'width=800,height=600'));\">Listen Live</a></li>
            <li style=\"background-image:url('/images/ftr-icon-win.png');\"><a href=\"http://clubmountain.gcmaz.com\" target=\"_blank\">Win Stuff</a></li>
            <li style=\"background-image:url('/images/ftr-icon-concerts.png');\"><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_onair"), "html", null, true);
        echo "\">On Air</a></li>
        </ul>
    </div>
    <div id=\"ftr-right\">
        <div id=\"ftr-right-1\">
            ";
        // line 177
        echo "        </div>
        <div id=\"ftr-right-2\">
            <p class=\"wall-poet yellow\">CITIES WE SERVE</p>
            <div style=\"margin-top:5px;\">
                <ul class=\"ftr-cities-list\" style=\"float:left;width:90px;\">
                    <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">Flagstaff</a></li>
                    <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">Prescott</a></li>
                    <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">Sedona</a></li>
                    <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">Williams</a></li>
                </ul>
                <ul class=\"ftr-cities-list\" style=\"float:right;width:140px;text-align:left;\">
                    <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">Cottonwood</a></li>
                    <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">Camp Verde</a></li>
                    <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">Prescott Valley</a></li>
                    <li><a href=\"http://www.gcmaz.com\" target=\"_blank\">Winslow</a></li>
                </ul>
                <br class=\"clear\" />
            </div>
        </div>
        <div id=\"ftr-right-3\">
            <a href=\"/\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ftr-mtn-logo.png"), "html", null, true);
        echo "\" width=\"125\" height=\"110\" alt=\"The New 93-9 The Mountain\" style=\"margin-top:-5px;\"/></a>
            <p style=\"color:#ccc;font-size:12px;font-weight:bold;padding:0;margin:-4px auto 0;\">
                93-9 The Mountain
            </p>
            <p style=\"color:#888888;font-size:10px;font-weight:bold;padding:0;margin:2px auto;\">
                    &copy; GuyAnn Corporation<br/>All Rights Reserved
            </p>
            <p style=\"padding:0;margin:2px auto;font-weight:bold;font-size:10px;\">
                <a href=\"http://www.gcmaz.com/legal/GeneralContestRules.pdf\" target=\"_blank\"  style=\"color:#777777;text-decoration:none;\">Contest Rules</a>
                &nbsp; | &nbsp;
                <a href=\"http://www.gcmaz.com/legal/eeo.pdf\" target=\"_blank\"  style=\"color:#777777;text-decoration:none;\">EEO</a>
            </p>
        </div>
        <div id=\"ftr-right-4\">
            <a href=\"http://www.facebook.com/TheNew939\" target=\"_blank\"><img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ftr-facebook.png"), "html", null, true);
        echo "\" width=\"44\" height=\"44\" alt=\"93-9 The Mountain on Facebook\" style=\"margin-top:30px;\" /></a>
            <br/>
            <a href=\"http://www.twitter.com/939TheMountain\" target=\"_blank\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ftr-twit.png"), "html", null, true);
        echo "\" width=\"44\" height=\"45\" alt=\"93-9 The Mountain on Twitter\" style=\"margin-top:10px;\"/></a>
        </div>
    </div>
    <br class=\"clear\" />
";
    }

    // line 219
    public function block_js_btm($context, array $blocks = array())
    {
        // line 220
        echo "    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId=159639224186993\";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
";
    }

    public function getTemplateName()
    {
        return "TheMountainMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 220,  397 => 219,  388 => 213,  383 => 211,  366 => 197,  344 => 177,  336 => 161,  330 => 158,  326 => 157,  322 => 155,  319 => 154,  311 => 149,  307 => 147,  304 => 146,  294 => 140,  291 => 139,  283 => 134,  280 => 133,  277 => 132,  269 => 126,  262 => 121,  251 => 113,  246 => 111,  242 => 110,  237 => 108,  227 => 101,  223 => 100,  219 => 99,  213 => 96,  203 => 89,  199 => 88,  195 => 87,  190 => 85,  185 => 82,  182 => 81,  175 => 77,  172 => 76,  169 => 75,  160 => 71,  154 => 69,  138 => 47,  135 => 46,  129 => 43,  121 => 41,  104 => 28,  97 => 24,  92 => 23,  89 => 22,  83 => 19,  77 => 16,  73 => 15,  68 => 14,  65 => 13,  60 => 10,  57 => 9,  49 => 5,  43 => 3,  174 => 105,  168 => 95,  164 => 94,  157 => 70,  152 => 87,  141 => 72,  137 => 71,  124 => 42,  116 => 58,  109 => 57,  107 => 29,  102 => 52,  99 => 51,  56 => 11,  52 => 6,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
