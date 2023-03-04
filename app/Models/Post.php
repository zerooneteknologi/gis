<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [''];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Scope a query searching.
     */
    public function scopeSearch(Builder $query, $filter): void
    {
        $query->when(
            $filter ?? false,
            fn ($query, $search) =>
            $query->where('postTitle', "LIKE", "%$search%")
                ->orWhere('postDesc', "LIKE", "%$search%")
        );

        $query->when(
            $filter['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas('category', fn ($query) =>
            $query->where('categoryName'))
        );
    }
}
