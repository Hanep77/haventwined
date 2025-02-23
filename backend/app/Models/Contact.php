<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = ["platform", "text", "link"];

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
}
