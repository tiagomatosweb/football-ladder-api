<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }
}
