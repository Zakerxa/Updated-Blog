<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Blog extends Model
{
    use HasFactory;
    // protected $fillabled=['title'];
    protected $guarded = ['id'];
    protected $with = ['category'];

    function scopeFilter($query, $filter)
    {
        $query->when($filter['search']??false, function ($query, $search) {
            $query->where('title', 'LIKE', '%' . $search . '%');
        });
        $query->when($filter['categories']??false, function ($query, $slug) {
            $query->whereHas('category', function($query) use ($slug){
               $query->where('slug',$slug);
            });
        });
    }

    function category()
    {
        return $this->belongsTo(Category::class);
    }
}
