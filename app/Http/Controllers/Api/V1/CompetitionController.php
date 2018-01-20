<?php

namespace App\Http\Controllers\Api\V1;


use App\Acme\Services\CompetitionService;

class CompetitionController extends ApiController
{
    private $competitionService;

    public function __construct(CompetitionService $competitionService)
    {
        $this->competitionService = $competitionService;
    }

    public function getCompetitions()
    {
        $output = $this->competitionService->getCompetitions();
        return $this->respond($output);
    }

    public function getLadder($competitionId)
    {
        $output = $this->competitionService->getLadder($competitionId);
        return $this->respond($output);
    }
}
