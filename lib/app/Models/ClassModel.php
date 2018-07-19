<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'class';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function student(){
    	return $this->hasMany('App\Models\Student','class_id','id');
    }
}
