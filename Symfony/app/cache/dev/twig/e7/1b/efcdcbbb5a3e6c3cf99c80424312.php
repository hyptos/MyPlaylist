<?php

/* MyPlaylistAppBundle:Playlist:viewPlaylist.html.twig */
class __TwigTemplate_e71befcdcbbb5a3e6c3cf99c80424312 extends Twig_Template
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
        echo "    Affichage de la playlist ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "playlist"), "name"), "html", null, true);
        echo "
    ";
        // line 7
        if (twig_test_empty($this->getAttribute($this->getContext($context, "playlist"), "songs"))) {
            // line 8
            echo "    \t<p>
    \t\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewSong"), "html", null, true);
            echo "\">Ajouter des chansons à votre playlist ?</a>
    \t</p>
    ";
        } else {
            // line 12
            echo "    <table class=\"table table-striped\" >
    <tr>
    \t<th>
    \t\tTitre
    \t</th>
    \t<th>
    \t\tSuppression
    \t</th>
    </tr>

        ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "playlist"), "songs"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["song"]) {
                // line 23
                echo "                <tr>
    \t\t\t\t<td><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MyPlaylist_viewSongId", array("id" => $this->getAttribute($this->getContext($context, "song"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "song"), "title"), "html", null, true);
                echo "</a></td>
    \t\t\t\t<td><a href=\"http://localhost/Symfony/web/app_dev.php/song/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "song"), "id"), "html", null, true);
                echo "/delToPlaylist/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "playlist"), "id"), "html", null, true);
                echo "\" ><button class=\"btn btn-danger\">&times;</button></a></td>
    \t\t\t</tr>
            ";
                // line 27
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['song'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "        </table>
        ";
        }
    }

    public function getTemplateName()
    {
        return "MyPlaylistAppBundle:Playlist:viewPlaylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  102 => 28,  98 => 27,  91 => 25,  85 => 24,  82 => 23,  65 => 22,  53 => 12,  47 => 9,  44 => 8,  42 => 7,  37 => 6,  34 => 5,  27 => 3,);
    }
}
