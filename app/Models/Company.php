<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'name',
        'email',
        'image',
        'page'
    ];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
