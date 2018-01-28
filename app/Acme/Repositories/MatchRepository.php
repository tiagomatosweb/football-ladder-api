<?php namespace App\Acme\Repositories;


use App\Match;

class MatchRepository extends Repository
{
    private $match;

    public function __construct(Match $match)
    {
        $this->match = $match;
    }

    public function get($matchId)
    {
        return $this->match->find($matchId);
    }
}