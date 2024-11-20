<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function category(): HasMany
    {
        return $this->hasMany(News::class);
    }

    protected $fillable = [
        'name'
    ];
}
