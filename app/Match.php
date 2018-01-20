<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
