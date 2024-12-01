<?php

declare(strict_types=1);

namespace App\Models\Movie;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    protected $fillable = [
        'active',
        'title',
        'slug',
        'description',
        'poster',
        'trailer',
        'release_year',
        'start_date',
        'end_date',
    ];
    public function movie_casts():HasMany{
        return $this->hasMany('App\Models\Movie\MovieCast');
    }
}
