<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_ee3fdfc7efee3af8ca6d5a77021f12dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  32 => 5,  29 => 4,  26 => 3,  203 => 71,  176 => 62,  174 => 61,  168 => 60,  158 => 59,  130 => 47,  100 => 34,  93 => 31,  88 => 28,  82 => 25,  79 => 24,  75 => 24,  69 => 20,  66 => 19,  60 => 16,  56 => 14,  54 => 13,  42 => 10,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  299 => 125,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  278 => 114,  273 => 111,  271 => 110,  266 => 107,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  213 => 79,  210 => 78,  207 => 73,  205 => 76,  200 => 73,  194 => 69,  191 => 68,  188 => 67,  186 => 67,  181 => 63,  175 => 59,  172 => 58,  169 => 57,  167 => 56,  160 => 53,  141 => 56,  128 => 39,  105 => 27,  101 => 25,  95 => 23,  86 => 20,  80 => 19,  77 => 23,  74 => 17,  71 => 16,  65 => 14,  59 => 12,  45 => 11,  34 => 5,  68 => 15,  61 => 16,  44 => 14,  37 => 6,  20 => 1,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 57,  137 => 45,  121 => 35,  118 => 40,  113 => 44,  109 => 38,  106 => 37,  104 => 36,  99 => 33,  96 => 32,  94 => 31,  90 => 21,  78 => 24,  72 => 21,  62 => 19,  53 => 9,  50 => 15,  48 => 10,  41 => 9,  39 => 8,  35 => 8,  30 => 4,  27 => 6,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  293 => 121,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 100,  243 => 96,  236 => 97,  226 => 87,  223 => 88,  215 => 83,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 69,  190 => 72,  182 => 70,  180 => 64,  170 => 64,  163 => 54,  156 => 56,  152 => 48,  149 => 47,  146 => 58,  138 => 42,  133 => 47,  129 => 42,  126 => 45,  123 => 44,  117 => 45,  114 => 31,  111 => 40,  108 => 39,  102 => 35,  98 => 24,  91 => 31,  87 => 29,  84 => 29,  81 => 28,  73 => 23,  70 => 22,  67 => 20,  64 => 20,  58 => 15,  52 => 12,  49 => 13,  46 => 15,  40 => 7,  36 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
