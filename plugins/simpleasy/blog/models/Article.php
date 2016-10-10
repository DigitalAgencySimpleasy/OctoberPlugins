<?php namespace Simpleasy\Blog\Models;

use Model;

/**
 * Article Model
 */
class Article extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'simpleasy_blog_articles';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = ['image' => ['System\Models\File']];
    public $attachMany = [];

}