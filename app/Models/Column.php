<?php

namespace App\Models;

use AnourValar\EloquentSerialize\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Column extends Model
{
    use HasFactory;

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
