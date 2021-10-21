<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategorieBien extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'nom',
        'description',
        'code'
    ];

    public function __toString()
    {
        return $this->nom;
    }

    /**
     * Get all of the offres for the CategorieBien
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offres(): HasMany
    {
        return $this->hasMany(Offre::class);
    }

    /**
     * Get all of the offreActives for the CategorieBien
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offreActives(): HasMany
    {
        return $this->hasMany(Offre::class)->where('visible',true)->inRandomOrder()->take(18);
    }
}
