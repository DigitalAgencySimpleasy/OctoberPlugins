<?php namespace Simpleasy\Blog;

use Backend;
use System\Classes\PluginBase;

/**
 * Blog Plugin Information File
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
            'name'        => 'Blog',
            'description' => 'Simple Blog by Simpleasy',
            'author'      => 'Simpleasy',
            'icon'        => 'icon-align-left'
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
            'Simpleasy\Blog\Components\Posts' => 'posts',
            'Simpleasy\Blog\Components\EntryForm' => 'formPost',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
//        return []; // Remove this line to activate

        return [
            'simpleasy.blog.manage_blog' => [
                'tab' => 'Blog',
                'label' => 'Manage Blog'
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
            'blog' => [
                'label'       => 'Blog',
                'url'         => Backend::url('simpleasy/blog/posts'),
                'icon'        => 'icon-file-text-o',
                'permissions' => ['simpleasy.blog.*'],
                'order'       => 500,
            ],
        ];
    }

    /**
     * Register Form Widgets for front-end forms
     *
     * @return array
     */

    public function registerFormWidgets()
    {
        return [
            'Backend\FormWidgets\CodeEditor' => [
                'label' => 'Code editor',
                'code'  => 'codeeditor'
            ],

            'Backend\FormWidgets\RichEditor' => [
                'label' => 'Rich editor',
                'code'  => 'richeditor'
            ],

            'Backend\FormWidgets\MarkdownEditor' => [
                'label' => 'Markdown editor',
                'code'  => 'markdown'
            ],

            'Backend\FormWidgets\FileUpload' => [
                'label' => 'File uploader',
                'code'  => 'fileupload'
            ],

            'Backend\FormWidgets\Relation' => [
                'label' => 'Relationship',
                'code'  => 'relation'
            ],

            'Backend\FormWidgets\DatePicker' => [
                'label' => 'Date picker',
                'code'  => 'datepicker'
            ],

            'Backend\FormWidgets\TimePicker' => [
                'label' => 'Time picker',
                'code'  => 'timepicker'
            ],

            'Backend\FormWidgets\ColorPicker' => [
                'label' => 'Color picker',
                'code'  => 'colorpicker'
            ],

            'Backend\FormWidgets\DataTable' => [
                'label' => 'Data Table',
                'code'  => 'datatable'
            ],

            'Backend\FormWidgets\RecordFinder' => [
                'label' => 'Record Finder',
                'code'  => 'recordfinder'
            ],

            'Backend\FormWidgets\Repeater' => [
                'label' => 'Repeater',
                'code'  => 'repeater'
            ],

            'Backend\FormWidgets\TagList' => [
                'label' => 'Tag List',
                'code'  => 'taglist'
            ]
        ];
    }


}
