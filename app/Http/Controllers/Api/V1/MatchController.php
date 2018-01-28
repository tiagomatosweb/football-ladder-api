<?php

namespace App\Http\Controllers\Api\V1;


use App\Acme\Services\MatchService;

class MatchController extends ApiController
{
    private $matchService;

    public function __construct(MatchService $matchService)
    {
        $this->matchService = $matchService;
    }

    public function updateMatch($matchId)
    {
        $input['match_id'] = $matchId;
        $input['score_team_a'] = request()->score_team_a;
        $input['score_team_b'] = request()->score_team_b;

        $output = $this->matchService->updateMatch($input);
        return $this->respond($output);
    }
}
