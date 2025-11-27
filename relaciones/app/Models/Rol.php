<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    /** @use HasFactory<\Database\Factories\RolFactory> */
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "role_user")->withPivot("agregado_por");
    }
}
