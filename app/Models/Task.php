<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //захист від масового створення записів
    //вкажемо які саме поля дозволяємо створювати призбереженні запису у таблиці БД
    protected $fillable = ['name', 'description', 'category_id'];

    //створити метод в якому вказуємо зв'язок: один task повязаний з однією категорією 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
