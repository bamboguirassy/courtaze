<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieBien extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'nom',
        'description'
    ];
}
