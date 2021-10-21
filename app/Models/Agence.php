<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function __toString()
    {
        return $this->nom;
    }
}
