<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'age'];

    public function getIsAnAdultAttribute() : bool
    {
        return $this->age >= 18;
    }
}
