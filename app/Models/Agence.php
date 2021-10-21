<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agence extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'slogan',
        'domain',
        'color',
        'description',
        'adresse',
        'enabled',
        'user_id',
        'horaireOuverture'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function __toString()
    {
        return $this->nom;
    }
    
    /**
     * Get all of the services for the Agence
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
