<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessClass extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable=[
        'title',
        'duration',
        'end',
        'start',
        'date',
        'description',
        'image',
        'participants',
        'trainer'
    ];
}
