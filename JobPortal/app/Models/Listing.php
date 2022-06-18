<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['tag'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('tags', 'like', '%' . $search . '%');
            });
        });
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
