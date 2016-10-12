<?php namespace Simpleasy\Blog\Components;

use Cms\Classes\ComponentBase;
use Simpleasy\Blog\Models\Post;

class Posts extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Posts Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public $posts;

    /**
     * @var array Posts
     */

    public function getPosts()
    {
        $posts = Post::paginate(2);
        return $posts;
    }
}