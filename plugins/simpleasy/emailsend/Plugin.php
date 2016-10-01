<?php namespace Simpleasy\Emailsend;

use Backend;
use System\Classes\PluginBase;

/**
 * emailsend Plugin Information File
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
            'name'        => 'emailsend',
            'description' => 'No description provided yet...',
            'author'      => 'simpleasy',
            'icon'        => 'icon-envelope-o'
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
//        return []; // Remove this line to activate

        return [
            'Simpleasy\Emailsend\Components\Emails' => 'emails',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'simpleasy.emailsend.some_permission' => [
                'tab' => 'emailsend',
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
//        return []; // Remove this line to activate

        return [
            'emailsend' => [
                'label'       => 'emailsend',
                'url'         => Backend::url('simpleasy/emailsend/emails'),
                'icon'        => 'icon-envelope-o',
                'permissions' => ['simpleasy.emailsend.*'],
                'order'       => 500,
            ],
        ];
    }

}
