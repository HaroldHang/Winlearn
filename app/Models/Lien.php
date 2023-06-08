<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lien extends Model
{
    use HasFactory;
    protected $table = 'liens';
    protected $fillable = [
        'title',
        'url',
        'concept_id',
        'statut'
    ];

    public function concept()
    {
        return $this->belongsTo(Concept::class);
    }
}
