<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sim extends Model
{
    /** @use HasFactory<\Database\Factories\SimFactory> */
    use HasFactory , SoftDeletes;

    protected $guarded = [];

    public function phones(): BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }
}
