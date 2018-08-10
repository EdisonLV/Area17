<?php namespace Area17\News\Models;

use Model;

/**
 * Author Model
 */
class Author extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required',
        'title' => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'area17_news_authors';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'posts' => 'Area17\News\Models\Post'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'avatar' => 'System\Models\File'
    ];
    public $attachMany = [];
}
