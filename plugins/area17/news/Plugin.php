<?php namespace Area17\News;

use Backend;
use System\Classes\PluginBase;

/**
 * News Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'News',
            'description' => 'No description provided yet...',
            'author'      => 'Area17',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
          'Area17\News\Components\Posts' => 'postsComponent',
          'Area17\News\Components\Trending' => 'trendingPosts',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'area17.news.manager' => [
                'tab' => 'News',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'news' => [
                'label'       => 'News',
                'url'         => Backend::url('area17/news/posts'),
                'icon'        => 'icon-list',
                'permissions' => ['area17.news.*'],
                'order'       => 500,
                'sideMenu' => [
                    'posts' => [
                        'label'       => 'All Posts',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('area17/news/posts'),
                        'permissions' => ['area17.news.*'],
                    ],
                    'authors' => [
                        'label'       => 'Authors',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('area17/news/authors'),
                        'permissions' => ['area17.news.*'],
                    ]
                ]
            ],
        ];
    }
}
