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
        return array (  40 => 12,  28 => 5,  89 => 20,  82 => 19,  72 => 16,  64 => 15,  55 => 14,  53 => 13,  49 => 12,  42 => 10,  34 => 7,  23 => 4,  103 => 24,  96 => 22,  94 => 21,  91 => 20,  87 => 19,  81 => 18,  74 => 16,  70 => 14,  66 => 12,  48 => 15,  31 => 5,  25 => 4,  22 => 2,  20 => 2,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  176 => 71,  170 => 67,  161 => 63,  157 => 61,  155 => 60,  152 => 59,  145 => 55,  141 => 54,  136 => 51,  134 => 50,  130 => 48,  128 => 47,  125 => 46,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 34,  93 => 31,  76 => 28,  73 => 27,  69 => 26,  61 => 24,  58 => 23,  56 => 9,  39 => 9,  32 => 11,  17 => 1,  92 => 39,  86 => 6,  79 => 40,  77 => 17,  57 => 21,  46 => 19,  37 => 6,  33 => 4,  29 => 5,  24 => 3,  19 => 2,  44 => 14,  41 => 7,  30 => 6,  27 => 3,);
    }
}
