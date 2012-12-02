<?php

/* MyPlaylistAppBundle:Song:viewEditSong.html.twig */
class __TwigTemplate_6246d46d7a88da16f50f81bc48b28258 extends Twig_Template
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
        echo " - Modification de votre Musique";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        if (twig_test_empty($this->getContext($context, "song"))) {
            // line 7
            echo "\t\t<p>Veuillez ajouter des chansons. <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewAddSong"), "html", null, true);
            echo "\">\">Ajout de Chanson</a></p>
\t";
        } else {
            // line 9
            echo "    Choix de la Musique à modifier :
    <ul>
  \t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "song"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 12
                echo "    \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_editSong", array("id" => $this->getAttribute($this->getContext($context, "value"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "title"), "html", null, true);
                echo "</a></li>
  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "  \t</ul>
";
        }
        // line 15
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Song:viewEditSong.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 14,  53 => 12,  49 => 11,  45 => 9,  39 => 7,  37 => 6,  34 => 5,  27 => 3,);
    }
}
