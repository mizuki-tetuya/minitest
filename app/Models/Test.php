<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    
    protected $table = '_tests';

    protected $guarded = array('id');

    public static $rules = array(
        'content'=>'required',
        'mail'=>'required'
    );
}
