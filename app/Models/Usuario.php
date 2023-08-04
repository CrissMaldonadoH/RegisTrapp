<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'profesion_id',
        'empresa',
        'user_id'
    ];

    public function profesion()
    {
        return $this->belongsTo(Profesion::class);
    }
}
