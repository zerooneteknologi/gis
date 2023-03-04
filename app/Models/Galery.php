<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galery extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [''];

    /**
     * relation invers hasmany galery to tour model
     */
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    /**
     * Scope a query to only include popular users.
     */
    public function scopeFilter(Builder $query, $filter): void
    {
        $query->when(
            $filter ?? false,
            fn ($query, $filter) =>
            $query->where('tour_id', $filter)
        );
    }
}
