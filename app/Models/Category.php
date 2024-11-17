<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Робимо звязок 1 до багатьох: category->багато tasks
    public function tasks()
    {
        //return $this->hasMany(Task::class, 'category_id','id'); //АБО
        return $this->hasMany(Task::class);
    }
}
