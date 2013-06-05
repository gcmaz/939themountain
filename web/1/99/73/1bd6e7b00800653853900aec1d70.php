<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_99731bd6e7b00800653853900aec1d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  70 => 26,  66 => 25,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  208 => 36,  198 => 29,  193 => 28,  188 => 25,  183 => 24,  178 => 23,  173 => 22,  163 => 20,  158 => 12,  153 => 11,  148 => 10,  143 => 9,  133 => 6,  128 => 5,  123 => 4,  117 => 39,  115 => 38,  112 => 37,  110 => 36,  103 => 31,  100 => 30,  95 => 28,  91 => 35,  88 => 25,  85 => 24,  82 => 23,  80 => 22,  75 => 28,  64 => 13,  62 => 24,  58 => 10,  54 => 8,  51 => 7,  400 => 220,  397 => 219,  388 => 213,  383 => 211,  366 => 197,  344 => 177,  336 => 161,  330 => 158,  326 => 157,  322 => 155,  319 => 154,  311 => 149,  307 => 147,  304 => 146,  294 => 140,  291 => 139,  283 => 134,  280 => 133,  277 => 132,  269 => 126,  262 => 121,  251 => 113,  246 => 111,  242 => 110,  237 => 108,  227 => 101,  223 => 100,  219 => 99,  213 => 38,  203 => 30,  199 => 88,  195 => 87,  190 => 85,  185 => 82,  182 => 81,  175 => 77,  172 => 76,  169 => 75,  160 => 71,  154 => 69,  138 => 8,  135 => 46,  129 => 43,  121 => 41,  104 => 28,  97 => 29,  92 => 23,  89 => 22,  83 => 30,  77 => 16,  73 => 20,  68 => 14,  65 => 13,  60 => 11,  57 => 9,  49 => 6,  43 => 4,  174 => 105,  168 => 21,  164 => 94,  157 => 70,  152 => 87,  141 => 72,  137 => 71,  124 => 42,  116 => 58,  109 => 57,  107 => 29,  102 => 52,  99 => 51,  56 => 9,  52 => 6,  47 => 5,  44 => 8,  38 => 1,  33 => 4,  30 => 5,);
    }
}
