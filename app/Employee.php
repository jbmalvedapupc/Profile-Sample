<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];

    // Accessor method DISREGARD.
    public function getFullNameAttribute()
    {
        return "{$this->lname}, {$this->fname} {$this->mname}";
    }
}
