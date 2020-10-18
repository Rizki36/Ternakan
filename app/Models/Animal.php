<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animals';
    public $incrementing = false;
    protected $fillable = ['id','name','gender','birthday','is_life','parent_id','child_num'];
}
