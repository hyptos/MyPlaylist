<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7a88a913e40d80703f5c1b28426921e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  60 => 16,  54 => 13,  186 => 69,  172 => 67,  165 => 64,  162 => 63,  132 => 54,  47 => 13,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 156,  323 => 150,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 105,  236 => 97,  226 => 89,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  180 => 69,  146 => 52,  138 => 49,  133 => 47,  126 => 45,  111 => 40,  108 => 42,  84 => 29,  67 => 20,  299 => 100,  293 => 133,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 81,  202 => 71,  196 => 74,  183 => 68,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 5,  156 => 56,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 34,  65 => 23,  59 => 16,  45 => 9,  103 => 24,  91 => 31,  74 => 22,  70 => 22,  66 => 20,  25 => 3,  89 => 35,  82 => 33,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  19 => 2,  42 => 8,  29 => 8,  26 => 3,  223 => 88,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 61,  152 => 54,  145 => 58,  130 => 48,  125 => 52,  119 => 45,  116 => 44,  112 => 43,  102 => 39,  98 => 35,  76 => 24,  73 => 23,  69 => 21,  56 => 14,  32 => 11,  24 => 6,  22 => 3,  23 => 3,  17 => 1,  68 => 24,  61 => 24,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 46,  121 => 47,  118 => 50,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 28,  78 => 32,  72 => 16,  64 => 19,  53 => 15,  50 => 14,  48 => 10,  41 => 11,  39 => 7,  35 => 8,  33 => 6,  30 => 5,  27 => 3,  182 => 70,  176 => 71,  169 => 66,  163 => 60,  160 => 57,  155 => 56,  151 => 62,  149 => 53,  141 => 54,  136 => 55,  134 => 50,  131 => 43,  128 => 53,  120 => 51,  117 => 43,  114 => 41,  109 => 38,  106 => 41,  100 => 30,  96 => 34,  93 => 36,  90 => 28,  87 => 29,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 16,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 8,  40 => 8,  37 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}
