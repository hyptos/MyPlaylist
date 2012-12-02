<?php

/* MyPlaylistAppBundle:Song:viewSong.html.twig */
class __TwigTemplate_1c7633a60e5a14113cf77f743b407739 extends Twig_Template
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
        echo "    Titre de la musique : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "song"), "title"), "html", null, true);
        echo " <br>
    Date de production : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "song"), "dateRecord"), "d-m-Y"), "html", null, true);
        echo "<br> 
    Path : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "song"), "filename"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Song:viewSong.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  37 => 6,  34 => 5,  27 => 3,);
    }
}
