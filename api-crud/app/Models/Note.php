<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "title",
        "description"
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
