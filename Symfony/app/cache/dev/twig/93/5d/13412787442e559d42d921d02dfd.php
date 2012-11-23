<?php

/* MyPlaylistAppBundle:MyPlaylist:search.html.twig */
class __TwigTemplate_935d13412787442e559d42d921d02dfd extends Twig_Template
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
        echo " - Recherche";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "     Faire une recherche : <input type=\"text\" data-provide=\"typeahead\">
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:MyPlaylist:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  27 => 3,);
    }
}
