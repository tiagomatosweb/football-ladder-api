<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    static $WIN = 3;
    static $DRAW = 1;
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function matches()
    {
        return $this->hasMany(Match::class);
    }
}
