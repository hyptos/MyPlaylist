<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

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

        // MyPlaylist_viewPlaylistId
        if (0 === strpos($pathinfo, '/playlist/view') && preg_match('#^/playlist/view/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewPlaylistAction',)), array('_route' => 'MyPlaylist_viewPlaylistId'));
        }

        // MyPlaylist_viewDelPlaylist
        if ($pathinfo === '/playlist/del') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewDelPlaylistAction',  '_route' => 'MyPlaylist_viewDelPlaylist',);
        }

        // MyPlaylist_viewAddPlaylist
        if ($pathinfo === '/playlist/add') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewAddAction',  '_route' => 'MyPlaylist_viewAddPlaylist',);
        }

        // MyPlaylist_viewEditPlaylist
        if ($pathinfo === '/playlist/edit') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewEditPlaylistAction',  '_route' => 'MyPlaylist_viewEditPlaylist',);
        }

        // MyPlaylist_editPlaylist
        if (0 === strpos($pathinfo, '/playlist/edit') && preg_match('#^/playlist/edit/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::editPlaylistAction',)), array('_route' => 'MyPlaylist_editPlaylist'));
        }

        // MyPlaylist_view_slugPlaylist
        if (0 === strpos($pathinfo, '/playlist') && preg_match('#^/playlist/(?<annee>\\d4)/(?<slug>[^/\\.]+)(?:\\.(?<format>html|xml))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewSlugAction',  'format' => 'html',)), array('_route' => 'MyPlaylist_view_slugPlaylist'));
        }

        // MyPlaylist_viewSong
        if ($pathinfo === '/song') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::indexAction',  '_route' => 'MyPlaylist_viewSong',);
        }

        // MyPlaylist_viewSongId
        if (0 === strpos($pathinfo, '/song/view') && preg_match('#^/song/view/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::viewSongAction',)), array('_route' => 'MyPlaylist_viewSongId'));
        }

        // MyPlaylist_addSongToPlaylist
        if (0 === strpos($pathinfo, '/song') && preg_match('#^/song/(?<idSong>\\d+)/addToPlaylist/(?<idPlaylist>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::addToPlaylistAction',)), array('_route' => 'MyPlaylist_addSongToPlaylist'));
        }

        // MyPlaylist_delSongToPlaylist
        if (0 === strpos($pathinfo, '/song') && preg_match('#^/song/(?<idSong>\\d+)/delToPlaylist/(?<idPlaylist>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::delToPlaylistAction',)), array('_route' => 'MyPlaylist_delSongToPlaylist'));
        }

        // MyPlaylist_viewAddSong
        if ($pathinfo === '/song/add') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::viewAddAction',  '_route' => 'MyPlaylist_viewAddSong',);
        }

        // MyPlaylist_editSong
        if (0 === strpos($pathinfo, '/song/edit') && preg_match('#^/song/edit/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::editSongAction',)), array('_route' => 'MyPlaylist_editSong'));
        }

        // MyPlaylist_viewEditSong
        if ($pathinfo === '/song/edit') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::viewEditSongAction',  '_route' => 'MyPlaylist_viewEditSong',);
        }

        // MyPlaylist_viewDelSong
        if ($pathinfo === '/song/del') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::viewDelSongAction',  '_route' => 'MyPlaylist_viewDelSong',);
        }

        // MyPlaylist_viewAlbum
        if ($pathinfo === '/album') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::indexAction',  '_route' => 'MyPlaylist_viewAlbum',);
        }

        // MyPlaylist_viewAlbumId
        if (0 === strpos($pathinfo, '/album/view') && preg_match('#^/album/view/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::ViewAlbumAction',)), array('_route' => 'MyPlaylist_viewAlbumId'));
        }

        // MyPlaylist_viewAddAlbum
        if ($pathinfo === '/album/add') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::viewAddAction',  '_route' => 'MyPlaylist_viewAddAlbum',);
        }

        // MyPlaylist_viewEditAlbum
        if ($pathinfo === '/album/edit') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::viewEditAction',  '_route' => 'MyPlaylist_viewEditAlbum',);
        }

        // MyPlaylist_editAlbum
        if (0 === strpos($pathinfo, '/album/edit') && preg_match('#^/album/edit/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::editAlbumAction',)), array('_route' => 'MyPlaylist_editAlbum'));
        }

        // MyPlaylist_viewDelAlbum
        if ($pathinfo === '/album/del') {
            return array (  '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::viewDelAction',  '_route' => 'MyPlaylist_viewDelAlbum',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
