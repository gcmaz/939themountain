<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_aa328c902cd8f316445457d966c5eed8 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  70 => 26,  66 => 25,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  208 => 36,  198 => 29,  193 => 28,  188 => 25,  183 => 24,  178 => 23,  173 => 22,  163 => 20,  158 => 12,  153 => 11,  148 => 10,  143 => 9,  133 => 6,  128 => 5,  123 => 4,  117 => 39,  115 => 38,  112 => 37,  110 => 36,  103 => 31,  100 => 30,  95 => 28,  91 => 35,  88 => 25,  85 => 24,  82 => 23,  80 => 22,  75 => 28,  64 => 13,  62 => 24,  58 => 10,  54 => 8,  51 => 7,  400 => 220,  397 => 219,  388 => 213,  383 => 211,  366 => 197,  344 => 177,  336 => 161,  330 => 158,  326 => 157,  322 => 155,  319 => 154,  311 => 149,  307 => 147,  304 => 146,  294 => 140,  291 => 139,  283 => 134,  280 => 133,  277 => 132,  269 => 126,  262 => 121,  251 => 113,  246 => 111,  242 => 110,  237 => 108,  227 => 101,  223 => 100,  219 => 99,  213 => 38,  203 => 30,  199 => 88,  195 => 87,  190 => 85,  185 => 82,  182 => 81,  175 => 77,  172 => 76,  169 => 75,  160 => 71,  154 => 69,  138 => 8,  135 => 46,  129 => 43,  121 => 41,  104 => 28,  97 => 29,  92 => 23,  89 => 22,  83 => 30,  77 => 16,  73 => 20,  68 => 14,  65 => 13,  60 => 11,  57 => 9,  49 => 6,  43 => 4,  174 => 105,  168 => 21,  164 => 94,  157 => 70,  152 => 87,  141 => 72,  137 => 71,  124 => 42,  116 => 58,  109 => 57,  107 => 29,  102 => 52,  99 => 51,  56 => 9,  52 => 6,  47 => 5,  44 => 8,  38 => 1,  33 => 4,  30 => 5,);
    }
}
