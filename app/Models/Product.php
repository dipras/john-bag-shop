<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Product extends Model
{
    protected $table = 'category';
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }


}
