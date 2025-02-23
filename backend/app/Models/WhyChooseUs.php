<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WhyChooseUs extends Model
{
    protected $fillable = ["title", "description"];

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
}
