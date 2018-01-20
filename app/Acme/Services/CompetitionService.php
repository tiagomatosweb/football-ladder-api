<?php namespace App\Acme\Services;

use App\Acme\Exceptions\CompetitionDoesNotExistException;
use App\Acme\Repositories\CompetitionRepository;
use App\Acme\Repositories\MatchRepository;
use App\Acme\Transformers\CompetitionTransformer;
use App\Competition;

class CompetitionService extends Service
{
    private $competitionRepository;
    private $matchRepository;
    private $competitionTransformer;

    public function __construct(CompetitionRepository $competitionRepository, MatchRepository $matchRepository, CompetitionTransformer $competitionTransformer)
    {
        $this->competitionRepository = $competitionRepository;
        $this->matchRepository = $matchRepository;
        $this->competitionTransformer = $competitionTransformer;
    }

    public function getCompetitions()
    {
        return $this->competitionRepository->getAll();
    }

    public function getLadder($competitionId)
    {
        $competition = $this->competitionRepository->get($competitionId);
        if (empty($competition)) {
            throw new CompetitionDoesNotExistException();
        }

        $matches = $this->competitionRepository->get($competitionId)->matches;
        $teams = $this->competitionRepository->get($competitionId)->teams;
        $teams->each(function($item) {
            $item->points = 0;
        });
        $teams = $teams->keyBy('id');

        foreach ($matches as $match) {
            if ($match->score_team_a > $match->score_team_b) {
                $teams[$match->team_a_id]->points += Competition::$WIN;
            } else if ($match->score_team_a < $match->score_team_b) {
                $teams[$match->team_b_id]->points += Competition::$WIN;
            } else if ($match->score_team_a === $match->score_team_b) {
                $teams[$match->team_a_id]->points += Competition::$DRAW;
                $teams[$match->team_b_id]->points += Competition::$DRAW;
            }
        }
        $teams = $teams->sortByDesc('points');

        $output = $this->competitionTransformer->teams($teams);
        return $output->values()->all();
    }
}