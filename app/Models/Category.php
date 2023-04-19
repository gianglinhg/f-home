<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'parent_id', 'featured'];

    public function products (){
        return $this->hasMany(Product::class);
    }
    public function children() {
        return $this->hasMany(Subcategory::class);
    }
}
