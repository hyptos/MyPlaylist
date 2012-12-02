<?php

/* MyPlaylistAppBundle:Playlist:index.html.twig */
class __TwigTemplate_8142ffb045b06b67c5816a5c9cffb2a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyPlaylistAppBundle:MyPlaylist:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyPlaylistAppBundle:MyPlaylist:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<h3>Accueil</h3>
\t";
        // line 7
        if (twig_test_empty((isset($context["playlist"]) ? $context["playlist"] : null))) {
            // line 8
            echo "\t\t<p>Veuillez creer des playlist. <a href=\"http://localhost/Symfony/web/app_dev.php/playlist/add\">\">Creation de Playlist</a></p>
\t";
        } else {
            // line 10
            echo "  \t<ul>
  \t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["playlist"]) ? $context["playlist"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 12
                echo "    \t<li><a href=\"http://localhost/Symfony/web/app_dev.php/playlist/view/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "name"), "html", null, true);
                echo "</a></li>
  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Playlist:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  53 => 12,  49 => 11,  46 => 10,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  27 => 3,);
    }
}
