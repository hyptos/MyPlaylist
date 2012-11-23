<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // MyPlaylist_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'MyPlaylist_home',);
        }

        // MyPlaylist_search
        if ($pathinfo === '/home/search') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\HomeController::searchAction',  '_route' => 'MyPlaylist_search',);
        }

        // MyPlaylist_mail
        if ($pathinfo === '/home/mail') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\HomeController::mailAction',  '_route' => 'MyPlaylist_mail',);
        }

        // MyPlaylist_about
        if ($pathinfo === '/home/about') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\HomeController::viewAboutAction',  '_route' => 'MyPlaylist_about',);
        }

        // MyPlaylist_viewPlaylist
        if ($pathinfo === '/playlist') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::indexAction',  '_route' => 'MyPlaylist_viewPlaylist',);
        }

        // MyPlaylist_addPlaylist
        if ($pathinfo === '/playlist/add') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::addAction',  '_route' => 'MyPlaylist_addPlaylist',);
        }

        // MyPlaylist_editPlaylist
        if ($pathinfo === '/playlist/edit') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::editAction',  '_route' => 'MyPlaylist_editPlaylist',);
        }

        // MyPlaylist_delPlaylist
        if ($pathinfo === '/playlist/del') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::delAction',  '_route' => 'MyPlaylist_delPlaylist',);
        }

        // MyPlaylist_view_slugPlaylist
        if (0 === strpos($pathinfo, '/playlist') && preg_match('#^/playlist/(?<annee>\\d{4})/(?<slug>[^/\\.]+)(?:\\.(?<format>html|xml))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewSlugAction',  'format' => 'html',)), array('_route' => 'MyPlaylist_view_slugPlaylist'));
        }

        // MyPlaylist_song
        if ($pathinfo === '/song') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::indexAction',  '_route' => 'MyPlaylist_song',);
        }

        // MyPlaylist_addSong
        if ($pathinfo === '/song/add') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::addAction',  '_route' => 'MyPlaylist_addSong',);
        }

        // MyPlaylist_editSong
        if ($pathinfo === '/song/edit') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::editAction',  '_route' => 'MyPlaylist_editSong',);
        }

        // MyPlaylist_delSong
        if ($pathinfo === '/song/del') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::delAction',  '_route' => 'MyPlaylist_delSong',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
