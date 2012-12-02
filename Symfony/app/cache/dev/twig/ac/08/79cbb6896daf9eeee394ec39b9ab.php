<?php

/* MyPlaylistAppBundle:Album:index.html.twig */
class __TwigTemplate_ac0879cbb6896daf9eeee394ec39b9ab extends Twig_Template
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
        echo " - Musiques";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h3>Accueil</h3>
  \t<ul>
  \t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "album"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 9
            echo "    \t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewAlbumId", array("id" => $this->getAttribute($this->getContext($context, "value"), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "title"), "html", null, true);
            echo "</a></li>
  \t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "    \t<li>Pas dAlbum(s) trouvé.</li>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Album:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  56 => 11,  46 => 9,  41 => 8,  37 => 6,  34 => 5,  27 => 3,);
    }
}
