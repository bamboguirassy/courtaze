<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AgenceSocialLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'reseau_social_id',
        'lien',
        'agence_id'
    ];

    /**
     * Get the reseauSocial that owns the AgenceSocialLink
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reseauSocial(): BelongsTo
    {
        return $this->belongsTo(ReseauSocial::class);
    }
}
