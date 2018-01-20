<?php namespace App\Acme\Repositories;


use App\Competition;

class MatchRepository extends Repository
{
    private $match;

    public function __construct(Competition $match)
    {
        $this->match = $match;
    }

    public function get($matchId)
    {
        return $this->match->find($matchId);
    }
}