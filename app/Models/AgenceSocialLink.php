<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenceSocialLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'reseau_social_id',
        'lien',
        'agence_id'
    ];
}
