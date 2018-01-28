<?php namespace App\Acme\Services;


use App\Acme\Events\MatchUpdatedEvent;
use App\Acme\Repositories\MatchRepository;

class MatchService extends Service
{
    private $matchRepository;
    private $competitionService;

    public function __construct(MatchRepository $matchRepository, CompetitionService $competitionService)
    {
        $this->matchRepository = $matchRepository;
        $this->competitionService = $competitionService;
    }

    public function updateMatch($input)
    {
        $match = $this->matchRepository->get($input['match_id']);

        if (empty($match)) {

        }
        $match->score_team_a = $input['score_team_a'];
        $match->score_team_b = $input['score_team_b'];

        if ($match->save()) {
            $ladder = $this->competitionService->getLadder($match->competition_id);
            event(new MatchUpdatedEvent($ladder));
        }

        return [$match];
    }
}