<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ["name", "icon"];


    public $translatable = ['name'];


    public function products(){
        return $this->hasMany(Product::class);
    }
}
