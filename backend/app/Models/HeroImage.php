<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeroImage extends Model
{
    protected $fillable = ["image"];

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
}
