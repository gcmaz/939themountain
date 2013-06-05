<?php

/* ::base.html.twig */
class __TwigTemplate_780a47013907eaaffeb60d81e3506156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

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
            'leftcol_ad' => array($this, 'block_leftcol_ad'),
            'exp_leaderboard' => array($this, 'block_exp_leaderboard'),
            'stream_box' => array($this, 'block_stream_box'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'js_btm' => array($this, 'block_js_btm'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 5
        $this->displayBlock('description', $context, $blocks);
        // line 6
        $this->displayBlock('keywords', $context, $blocks);
        // line 7
        echo "<meta charset=\"utf-8\">
";
        // line 8
        $this->displayBlock('favicons', $context, $blocks);
        // line 9
        $this->displayBlock('styles', $context, $blocks);
        // line 10
        $this->displayBlock('ie_crap', $context, $blocks);
        // line 11
        $this->displayBlock('js_top', $context, $blocks);
        // line 12
        $this->displayBlock('analytics', $context, $blocks);
        // line 13
        echo "</head>
<body class=\"centered\">
<div id=\"fb-root\"></div>
<div id=\"wrapper\" class=\"centered page\">
    <div class=\"bgtile centered\">
        <div class=\"bghdr centered\">
            <div id=\"leftcol\">
                ";
        // line 20
        $this->displayBlock('leftcol_logo', $context, $blocks);
        // line 21
        echo "                ";
        $this->displayBlock('leftcol_sponsor', $context, $blocks);
        echo " 
                ";
        // line 22
        $this->displayBlock('leftcol_nav', $context, $blocks);
        // line 23
        echo "                ";
        $this->displayBlock('leftcol_mc', $context, $blocks);
        // line 24
        echo "                ";
        $this->displayBlock('leftcol_fb', $context, $blocks);
        // line 25
        echo "                ";
        $this->displayBlock('leftcol_ad', $context, $blocks);
        // line 26
        echo "          </div>
            <div id=\"rightcol\">
                ";
        // line 28
        $this->displayBlock('exp_leaderboard', $context, $blocks);
        // line 29
        echo "                ";
        $this->displayBlock('stream_box', $context, $blocks);
        // line 30
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "            </div>
        </div>
    </div>
</div>
<div id=\"footer\" class=\"centered\">
";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "</div>
";
        // line 38
        $this->displayBlock('js_btm', $context, $blocks);
        // line 39
        echo "</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 8
    public function block_favicons($context, array $blocks = array())
    {
    }

    // line 9
    public function block_styles($context, array $blocks = array())
    {
    }

    // line 10
    public function block_ie_crap($context, array $blocks = array())
    {
    }

    // line 11
    public function block_js_top($context, array $blocks = array())
    {
    }

    // line 12
    public function block_analytics($context, array $blocks = array())
    {
    }

    // line 20
    public function block_leftcol_logo($context, array $blocks = array())
    {
    }

    // line 21
    public function block_leftcol_sponsor($context, array $blocks = array())
    {
    }

    // line 22
    public function block_leftcol_nav($context, array $blocks = array())
    {
    }

    // line 23
    public function block_leftcol_mc($context, array $blocks = array())
    {
    }

    // line 24
    public function block_leftcol_fb($context, array $blocks = array())
    {
    }

    // line 25
    public function block_leftcol_ad($context, array $blocks = array())
    {
    }

    // line 28
    public function block_exp_leaderboard($context, array $blocks = array())
    {
    }

    // line 29
    public function block_stream_box($context, array $blocks = array())
    {
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 38
    public function block_js_btm($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 36,  198 => 29,  193 => 28,  188 => 25,  183 => 24,  178 => 23,  173 => 22,  163 => 20,  158 => 12,  153 => 11,  148 => 10,  143 => 9,  133 => 6,  128 => 5,  123 => 4,  117 => 39,  115 => 38,  112 => 37,  110 => 36,  103 => 31,  100 => 30,  95 => 28,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  80 => 22,  75 => 21,  64 => 13,  62 => 12,  58 => 10,  54 => 8,  51 => 7,  400 => 220,  397 => 219,  388 => 213,  383 => 211,  366 => 197,  344 => 177,  336 => 161,  330 => 158,  326 => 157,  322 => 155,  319 => 154,  311 => 149,  307 => 147,  304 => 146,  294 => 140,  291 => 139,  283 => 134,  280 => 133,  277 => 132,  269 => 126,  262 => 121,  251 => 113,  246 => 111,  242 => 110,  237 => 108,  227 => 101,  223 => 100,  219 => 99,  213 => 38,  203 => 30,  199 => 88,  195 => 87,  190 => 85,  185 => 82,  182 => 81,  175 => 77,  172 => 76,  169 => 75,  160 => 71,  154 => 69,  138 => 8,  135 => 46,  129 => 43,  121 => 41,  104 => 28,  97 => 29,  92 => 23,  89 => 22,  83 => 19,  77 => 16,  73 => 20,  68 => 14,  65 => 13,  60 => 11,  57 => 9,  49 => 6,  43 => 4,  174 => 105,  168 => 21,  164 => 94,  157 => 70,  152 => 87,  141 => 72,  137 => 71,  124 => 42,  116 => 58,  109 => 57,  107 => 29,  102 => 52,  99 => 51,  56 => 9,  52 => 6,  47 => 5,  44 => 8,  38 => 1,  33 => 4,  30 => 3,);
    }
}
