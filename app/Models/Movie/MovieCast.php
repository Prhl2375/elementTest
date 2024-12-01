<?php

namespace App\Models\Movie;

use Illuminate\Database\Eloquent\Model;

class MovieCast extends Model
{
    protected $fillable = [
        'movie_id',
        'name',
        'slug',
        'type',
        'image',
    ];
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
