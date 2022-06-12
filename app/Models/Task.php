<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Task
 * @package App\Models
 * @version June 11, 2022, 11:53 pm UTC
 *
 * @property string $name
 * @property boolean $done
 */
class Task extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tasks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'done'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'done' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'done' => 'required'
    ];

    
}
