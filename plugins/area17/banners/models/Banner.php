<?php namespace Area17\Banners\Models;

use Model;

/**
 * Banner Model
 */
class Banner extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
      'title'                  => 'required',
      'link'                   => 'required',
      'image'                  => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'area17_banners_banners';

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
    public $attachOne = [];
    public $attachMany = [];
}
