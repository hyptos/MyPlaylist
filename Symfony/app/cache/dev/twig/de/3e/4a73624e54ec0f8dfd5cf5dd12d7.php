<?php

/* MyPlaylistAppBundle:MyPlaylist:about.html.twig */
class __TwigTemplate_de3e4a73624e54ec0f8dfd5cf5dd12d7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>A propos !</title>
    </head>
    <body>
        <h3><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_home"), "html", null, true);
        echo "\">Home</a></h3>
        <h3><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_add"), "html", null, true);
        echo "\">Ajouter</a></h3>
        <h3><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_edit"), "html", null, true);
        echo "\">Modifier</a></h3>
        <h3><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_del"), "html", null, true);
        echo "\">Supprimer</a></h3>
        <h3><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_search"), "html", null, true);
        echo "\">Rechercher</a></h3>
        <h3><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_about"), "html", null, true);
        echo "\">A Propos</a></h3>

        <p>
            Ce site a été realiser dans un but pédagogique et dans le cadre d'un projet en Licence de Math/Info.
        </p>
        <p>
            Ci-joint le MCD que nous avons utiliser : <img src=\"#\" alt=\"MCD\"/>
        </p>
        <p>
            Nous remercions machin, bidule et truc.
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:MyPlaylist:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  25 => 7,  17 => 1,);
    }
}
