<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'status ',
    ];

    /**
     * Relations
     */
    public function products(): HasMany
    {
        return $this->hasMany(CartProduct::class);
    }

    /**
     * Custom methods
     */
    public function getRelationsForLoading(): array
    {
        return [
            'order',
            'products',
        ];
    }
}
