<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Faq extends Model
{
    protected $fillable = ["question", "answer"];

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
}
