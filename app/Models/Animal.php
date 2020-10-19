<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animals';
    public $incrementing = false;
    protected $fillable = ['id','name','gender','birthday','is_life','father_id',"mother_id",'child_num'];

    public function scopeFather($query)
    {
        return $query->where("gender","f");
    }

    public function scopeMother($query)
    {
        return $query->where("gender","m");
    }
}
