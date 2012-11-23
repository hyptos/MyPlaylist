<?php

/* MyPlaylistAppBundle:Song:menu.html.twig */
class __TwigTemplate_d681de1e800df72e26bbf54228afc506 extends Twig_Template
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
        echo " <nav>
            <h5><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_addSong"), "html", null, true);
        echo "\">Ajouter une chanson</a></h5>
            <h5><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_editSong"), "html", null, true);
        echo "\">Modifier une chanson</a></h5>
            <h5><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_delSong"), "html", null, true);
        echo "\">Supprimer une chanson</a></h5>
 </nav>";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Song:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  20 => 2,  17 => 1,  81 => 18,  78 => 17,  72 => 5,  63 => 19,  61 => 17,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  36 => 10,  32 => 9,  25 => 5,  19 => 1,  40 => 11,  37 => 6,  34 => 5,  27 => 3,);
    }
}
