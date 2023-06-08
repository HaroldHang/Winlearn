<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    use HasFactory;
    protected $table = 'concepts';
    protected $fillable = [
        'title',
        'description',
        'ordre',
        'language_id',
        'statut'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
