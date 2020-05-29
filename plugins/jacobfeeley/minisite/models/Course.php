<?php namespace JacobFeeley\Minisite\Models;

use Model;

/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jacobfeeley_minisite_courses';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = [
       'why_join'
     ];

    public $attachOne = [
      'banner' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'categories' => [Category::class, 'table' => 'jacobfeeley_minisite_category_course'],
    ];
}
