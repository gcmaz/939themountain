<?php

/* TheMountainMainBundle:Page:index.html.twig */
class __TwigTemplate_0a6049126439ccf125661456997d8ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TheMountainMainBundle::layout.html.twig");

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'js_top' => array($this, 'block_js_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TheMountainMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/nivo-slider/nivo-slider.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_js_top($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("js_top", $context, $blocks);
        echo "
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.tweet.cache.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/nivo-slider/jquery.nivo.slider.pack.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'>
    \$(document).ready(function(){
     jQuery(function(\$){
            \$(\"#ticker\").tweet({
              username: \"939TheMountain\",
              list: \"the-mountain-list\",
              page: 1,
              avatar_size: 32,
              count: 15,
              loading_text: \"loading ...\"
            }).bind(\"loaded\", function() {
              var ul = \$(this).find(\".tweet_list\");
              var ticker = function() {
                setTimeout(function() {
                  var top = ul.position().top;
                  var h = ul.height();
                  var incr = (h / ul.children().length);
                  var newTop = top - incr;
                  if (h + newTop <= 0) newTop = 0;
                  ul.animate( {top: newTop}, 400 );
                  ticker();
                }, 5000);
              };
              ticker();
            });
        });
        //nivo slider
        \$(window).load(function() {
            \$('#slider').nivoSlider({
                effect: 'boxRain',
                pauseTime: 5000,
                directionNav: false,
                pauseOnHover: false
            });
        });
     });
    </script>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "    <div class=\"mainbox_box\">
        <div class=\"slider_wrapper theme_default\">
            <div id=\"slider\" class=\"nivoSlider\">
                ";
        // line 56
        echo "                ";
        // line 57
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_contest", array("contest" => "daily-bribe")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/660x250/daily-bribe.jpg"), "html", null, true);
        echo "\" width=\"660\" height=\"250\" alt=\"The Daily Bribe\" title=\"Win \$50 Every Weekday - The Daily Bribe - Get Contest Details &raquo;\" /></a>
                <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_concerts"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/660x250/widespread-panic-1.jpg"), "html", null, true);
        echo "\" data-thumb=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/660x250/widespread-panic-1.jpg"), "html", null, true);
        echo "\" width=\"660\" height=\"250\" alt=\"Widespread Panic\"></a>
                ";
        // line 60
        echo "            </div>
        </div>
    </div>
    <div class=\"listener_box\">
        <div id=\"lb1\">
            <p>#Flagstaff</p>
            <iframe src=\"http://snapwidget.com/sl/?h=ZmxhZ3N0YWZmfGlufDEyNXwyfDN8fG5vfDV8bm9uZQ==\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>\t\t\t\t
            <p>#Prescott</p>
            <iframe src=\"http://snapwidget.com/sl/?h=cHJlc2NvdHR8aW58MTI1fDJ8M3x8bm98NXxub25l\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none; overflow:hidden; width:130px; height: 130px\" ></iframe>
        </div>
        <div id=\"lb3\">
            ";
        // line 71
        echo $this->getContext($context, "display_blockA");
        echo "
            ";
        // line 72
        echo $this->getContext($context, "display_blockB");
        echo "
        </div>
        <div id=\"lb2\">
            <div class=\"fb-like-box\" data-href=\"http://www.facebook.com/TheNew939\" data-width=\"340\" data-height=\"305\" data-show-faces=\"false\" data-colorscheme=\"dark\" data-stream=\"true\" data-border-color=\"black\" data-header=\"false\" style=\"background-color:#151515;text-align:left;\"></div>
        </div>
        <br class=\"clear\"/>
        <p style=\"float:left;color:#666;font-size:10px;font-weight:700;margin-left:25px;\">Instagram Photos</p>
        <p style=\"float:right;color:#666;font-size:10px;font-weight:700;margin-right:25px;\">Instagram Photos</p>
        ";
        // line 87
        echo "        <br class=\"clear\"/><br/><br/>
        <div class=\"box_320x150 box_left\">
            <a href=\"http://clubmountain.939themountain.com/asp3/lwcodes.aspx\" target=\"_blank\">
                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/320x150-rock-word.jpg"), "html", null, true);
        echo "\" width=\"320\" height=\"150\" alt=\"Play The Rock Word\"/>
            </a>
        </div>
        <div class=\"box_320x150 box_right\">
            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("TheMountainMainBundle_splash", array("splash" => "4th-july-parade")), "html", null, true);
        echo "\" >
                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/320x150-4th-july-parade.jpg"), "html", null, true);
        echo "\" width=\"320\" height=\"150\" alt=\"4th July Parade Flagstaff\"/>
            </a>
        </div>
        ";
        // line 105
        echo "        <br class=\"clear\"/>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TheMountainMainBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 105,  168 => 95,  164 => 94,  157 => 90,  152 => 87,  141 => 72,  137 => 71,  124 => 60,  116 => 58,  109 => 57,  107 => 56,  102 => 52,  99 => 51,  56 => 11,  52 => 10,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
