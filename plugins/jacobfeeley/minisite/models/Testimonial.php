<?php namespace JacobFeeley\Minisite\Models;

use Model;

/**
 * Model
 */
class Testimonial extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jacobfeeley_minisite_testimonials';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
      'image' => 'System\Models\File'
    ];

}
