<?php

/* MyPlaylistAppBundle:MyPlaylist:layout.html.twig */
class __TwigTemplate_f9650fb5bf19bba0cbc2c98dc997c8d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <nav>
            <h3><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_home"), "html", null, true);
        echo "\">Home</a></h3>
            <h3><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_addPlaylist"), "html", null, true);
        echo "\">Ajouter</a></h3>
            <h3><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_editPlaylist"), "html", null, true);
        echo "\">Modifier</a></h3>
            <h3><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_delPlaylist"), "html", null, true);
        echo "\">Supprimer</a></h3>
            <h3><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_search"), "html", null, true);
        echo "\">Rechercher</a></h3>
            <h3><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_song"), "html", null, true);
        echo "\">Musiques</a></h3>
            <h3><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_about"), "html", null, true);
        echo "\">A Propos</a></h3>
        </nav>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        <footer>
            copyright &copy; 2012 Antoine Martin, Dorian Garcia 
        </footer>

    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MyPlaylist";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myplaylistapp/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:MyPlaylist:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  102 => 23,  95 => 9,  91 => 8,  86 => 7,  83 => 6,  77 => 5,  68 => 25,  66 => 23,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  41 => 16,  37 => 15,  32 => 12,  30 => 6,  26 => 5,  20 => 1,);
    }
}
