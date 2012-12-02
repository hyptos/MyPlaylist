<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'MyPlaylist_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),),
        'MyPlaylist_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\HomeController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/search',    ),  ),),
        'MyPlaylist_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\HomeController::mailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/mail',    ),  ),),
        'MyPlaylist_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\HomeController::viewAboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/about',    ),  ),),
        'MyPlaylist_viewPlaylist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/playlist',    ),  ),),
        'MyPlaylist_viewPlaylistId' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewPlaylistAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/playlist/view',    ),  ),),
        'MyPlaylist_viewDelPlaylist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewDelPlaylistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/playlist/del',    ),  ),),
        'MyPlaylist_viewAddPlaylist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/playlist/add',    ),  ),),
        'MyPlaylist_viewEditPlaylist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewEditPlaylistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/playlist/edit',    ),  ),),
        'MyPlaylist_editPlaylist' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::editPlaylistAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/playlist/edit',    ),  ),),
        'MyPlaylist_view_slugPlaylist' => array (  0 =>   array (    0 => 'annee',    1 => 'slug',    2 => 'format',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\PlaylistController::viewSlugAction',    'format' => 'html',  ),  2 =>   array (    'annee' => '\\d4',    'format' => 'html|xml',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|xml',      3 => 'format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d4',      3 => 'annee',    ),    3 =>     array (      0 => 'text',      1 => '/playlist',    ),  ),),
        'MyPlaylist_viewSong' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/song',    ),  ),),
        'MyPlaylist_viewSongId' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::viewSongAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/song/view',    ),  ),),
        'MyPlaylist_addSongToPlaylist' => array (  0 =>   array (    0 => 'idSong',    1 => 'idPlaylist',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::addToPlaylistAction',  ),  2 =>   array (    'idSong' => '\\d+',    'idPlaylist' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idPlaylist',    ),    1 =>     array (      0 => 'text',      1 => '/addToPlaylist',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idSong',    ),    3 =>     array (      0 => 'text',      1 => '/song',    ),  ),),
        'MyPlaylist_delSongToPlaylist' => array (  0 =>   array (    0 => 'idSong',    1 => 'idPlaylist',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::delToPlaylistAction',  ),  2 =>   array (    'idSong' => '\\d+',    'idPlaylist' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idPlaylist',    ),    1 =>     array (      0 => 'text',      1 => '/delToPlaylist',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idSong',    ),    3 =>     array (      0 => 'text',      1 => '/song',    ),  ),),
        'MyPlaylist_viewAddSong' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::viewAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/song/add',    ),  ),),
        'MyPlaylist_editSong' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::editSongAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/song/edit',    ),  ),),
        'MyPlaylist_viewEditSong' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::viewEditSongAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/song/edit',    ),  ),),
        'MyPlaylist_viewDelSong' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\SongController::viewDelSongAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/song/del',    ),  ),),
        'MyPlaylist_viewAlbum' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/album',    ),  ),),
        'MyPlaylist_viewAlbumId' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::ViewAlbumAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/album/view',    ),  ),),
        'MyPlaylist_viewAddAlbum' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::viewAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/album/add',    ),  ),),
        'MyPlaylist_viewEditAlbum' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::viewEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/album/edit',    ),  ),),
        'MyPlaylist_editAlbum' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::editAlbumAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/album/edit',    ),  ),),
        'MyPlaylist_viewDelAlbum' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyPlaylist\\AppBundle\\Controller\\AlbumController::viewDelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/album/del',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
