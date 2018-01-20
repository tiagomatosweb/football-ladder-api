<?php namespace App\Acme\Repositories;


use App\Competition;

class CompetitionRepository extends Repository
{
    private $competition;

    public function __construct(Competition $competition)
    {
        $this->competition = $competition;
    }

    public function getAll()
    {
        return $this->competition->all();
    }

    public function get($competitionId)
    {
        return $this->competition->find($competitionId);
    }
}