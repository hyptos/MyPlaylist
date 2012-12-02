<?php

/* MyPlaylistAppBundle:Song:index.html.twig */
class __TwigTemplate_40670f1bbb599fb23689e773d77120db extends Twig_Template
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
    <table class=\"table table-striped\" >
    <tr>
    \t<th>
    \t\tTitre
    \t</th>
    \t<th>
    \t\tdurée
    \t</th>
    \t<th>
    \t\tChemin
    \t</th>
    \t<th>
    \t\tAjout
    \t</th>
    </tr>
  \t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "song"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 23
            echo "    \t<tr>
    \t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewSongId", array("id" => $this->getAttribute($this->getContext($context, "value"), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "title"), "html", null, true);
            echo "</a></td>
    \t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "length"), "html", null, true);
            echo "</td>
    \t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "filename"), "html", null, true);
            echo "</td>
    \t\t<td>
                <div class=\"btn-group\">
                  <a class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    Action
                    <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu\">
                    ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "playlist"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["valuePl"]) {
                echo "                    
                        <li><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_addSongToPlaylist", array("idSong" => $this->getAttribute($this->getContext($context, "value"), "id"), "idPlaylist" => $this->getAttribute($this->getContext($context, "valuePl"), "id"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "valuePl"), "name"), "html", null, true);
                echo "</a></li>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 37
                echo "                        <p>Veuillez creer une playlist</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valuePl'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "                  </ul>
                </div>
            </td>
    \t</tr>
  \t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "  \t    \t<p>Pas de Musique(s) trouvé.</p>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Song:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 44,  107 => 39,  100 => 37,  91 => 35,  84 => 34,  73 => 26,  69 => 25,  63 => 24,  60 => 23,  55 => 22,  37 => 6,  34 => 5,  27 => 3,);
    }
}
