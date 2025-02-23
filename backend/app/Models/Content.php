<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Content extends Model
{
    protected $fillable = ["text_banner", "about"];

    protected $casts = [
        'data' => 'array',
    ];

    public function heroImages(): HasMany
    {
        return $this->hasMany(HeroImage::class);
    }

    public function whyChooseUs(): HasMany
    {
        return $this->hasMany(WhyChooseUs::class);
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
