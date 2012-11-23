<?php

/* MyPlaylistAppBundle:Song:del.html.twig */
class __TwigTemplate_2f2dd7f476350775991ed9aab1688160 extends Twig_Template
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
        echo " - Suppression";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->loadTemplate("MyPlaylistAppBundle:Song:menu.html.twig")->display($context);
        // line 7
        echo "   Il s'agit de la vue gérant les musiques
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Song:del.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  34 => 5,  27 => 3,);
    }
}
