<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voitures extends Model
{
    use HasFactory;
    protected $table='Voitures';
    protected $fillable=[
        'marque',
        'type',
        'prix',
        'description',
        'image',
        'client_id',
    ];
}
