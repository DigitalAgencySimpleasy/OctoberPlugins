<?php namespace Simpleasy\Slider\Models;

use Model;

/**
 * Slide Model
 */
class Slide extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'simpleasy_slider_slides';

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
    public $attachOne = ['slide_image' => ['System\Models\File']];
    public $attachMany = [];

}