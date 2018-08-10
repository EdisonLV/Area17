<?php namespace Area17\News\Models;

use Model;

/**
 * Post Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'body'];

    public $rules = [
        'title' => 'required',
        'author' => 'required',
        'image' => 'required|image',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'area17_news_posts';

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => 'title'];

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
    public $hasMany = [];
    public $belongsTo = [
      'author' => 'Area17\News\Models\Author'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
      'image' => 'System\Models\File'
    ];
    public $attachMany = [];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->orderBy('sort_order', 'asc')->with('author');
    }
}
