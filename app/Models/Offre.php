<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'visible',
        'proposition',
        'categorie_bien_id',
        'user_id',
        'agence_id',
        'nombreAppartement',
        'nombreStudio',
        'nombreChambre',
        'isMeuble',
        'hasGarage',
        'hasCuisine',
        'hasToilettePublique',
        'hasSalon',
        'hasToiletteInterieure',
        'niveau',
        'nombreChambreAvecToilette',
        'ville',
        'adresse',
        'prix',
        'description',
        'superficie',
        'longueur',
        'largeur',
        'latitude',
        'longitude',
        'geolocalise',
        'nombreEtage'
    ];

    /**
     * Get all of the images for the Offre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the categorieBien that owns the Offre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorieBien(): BelongsTo
    {
        return $this->belongsTo(CategorieBien::class);
    }

    /**
     * Get the user that owns the Offre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function __toString()
    {
        return $this->proposition.' - '.$this->categorieBien->nom.' à '.$this->ville.', '.$this->adresse;
    }
}
