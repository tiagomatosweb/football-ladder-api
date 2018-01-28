<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'score_team_a', 'score_team_b'
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
