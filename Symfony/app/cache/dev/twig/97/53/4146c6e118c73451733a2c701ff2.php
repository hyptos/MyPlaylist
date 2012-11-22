<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_97534146c6e118c73451733a2c701ff2 extends Twig_Template
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
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
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
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
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
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  51 => 38,  18 => 1,  21 => 3,  788 => 469,  785 => 468,  774 => 466,  770 => 465,  766 => 463,  753 => 462,  727 => 457,  724 => 456,  705 => 454,  688 => 453,  684 => 451,  680 => 450,  676 => 449,  672 => 448,  668 => 447,  664 => 446,  661 => 445,  659 => 444,  642 => 443,  631 => 442,  616 => 437,  611 => 435,  607 => 434,  604 => 433,  602 => 432,  588 => 431,  556 => 401,  538 => 398,  521 => 397,  518 => 396,  516 => 395,  511 => 393,  506 => 391,  179 => 87,  171 => 85,  164 => 82,  159 => 80,  154 => 77,  124 => 61,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  205 => 95,  200 => 73,  191 => 68,  188 => 89,  167 => 56,  105 => 27,  95 => 23,  207 => 77,  174 => 61,  168 => 60,  88 => 41,  75 => 18,  60 => 25,  54 => 15,  186 => 66,  172 => 58,  165 => 64,  162 => 63,  132 => 54,  47 => 17,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 138,  236 => 97,  226 => 87,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  180 => 64,  146 => 74,  138 => 42,  133 => 47,  126 => 45,  111 => 40,  108 => 42,  84 => 29,  67 => 20,  299 => 125,  293 => 121,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 86,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 96,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 94,  196 => 69,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 51,  101 => 25,  80 => 19,  63 => 16,  36 => 18,  156 => 56,  148 => 75,  142 => 73,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 52,  85 => 40,  65 => 21,  59 => 18,  45 => 21,  103 => 24,  91 => 42,  74 => 34,  70 => 22,  66 => 30,  25 => 4,  89 => 28,  82 => 27,  92 => 39,  86 => 20,  77 => 35,  57 => 21,  19 => 2,  42 => 11,  29 => 6,  26 => 3,  223 => 88,  214 => 90,  210 => 78,  203 => 71,  199 => 83,  194 => 92,  192 => 62,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 61,  152 => 48,  145 => 58,  130 => 47,  125 => 52,  119 => 45,  116 => 44,  112 => 43,  102 => 35,  98 => 24,  76 => 26,  73 => 24,  69 => 23,  56 => 25,  32 => 8,  24 => 3,  22 => 2,  23 => 3,  17 => 1,  68 => 13,  61 => 21,  44 => 14,  20 => 2,  161 => 81,  153 => 50,  150 => 49,  147 => 51,  143 => 57,  137 => 71,  129 => 46,  121 => 35,  118 => 50,  113 => 44,  104 => 35,  99 => 33,  94 => 21,  81 => 28,  78 => 32,  72 => 25,  64 => 19,  53 => 15,  50 => 18,  48 => 15,  41 => 11,  39 => 12,  35 => 7,  33 => 8,  30 => 6,  27 => 6,  182 => 88,  176 => 86,  169 => 84,  163 => 54,  160 => 53,  155 => 56,  151 => 62,  149 => 47,  141 => 43,  136 => 55,  134 => 50,  131 => 43,  128 => 39,  120 => 51,  117 => 57,  114 => 31,  109 => 38,  106 => 41,  100 => 34,  96 => 32,  93 => 34,  90 => 21,  87 => 28,  83 => 24,  79 => 24,  71 => 33,  62 => 11,  58 => 15,  55 => 20,  52 => 19,  49 => 37,  46 => 11,  43 => 13,  40 => 12,  37 => 9,  34 => 7,  31 => 6,  28 => 5,);
    }
}
