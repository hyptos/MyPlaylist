<?php

/* MyPlaylistAppBundle:Playlist:edit.html.twig */
class __TwigTemplate_e9613bf8dcfe09b62d0dea75444e92c2 extends Twig_Template
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
        echo " - Modification de votre playlist";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    Votre playlist porte le nom de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "playlist"), "name"), "html", null, true);
        echo " et possède l'id ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "playlist"), "Id"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Playlist:edit.html.twig";
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
