<?php

namespace App\Http\Controllers;

use App\Services\TimeService;
use Illuminate\Http\Request;

class TimeRpcController extends Controller
{
    protected TimeService $timeService;

    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }

    public function getTime()
    {
        $currentTime = $this->timeService->getCurrentTime();


        return response(
            "Aktuálny čas je: $currentTime", 200)
            ->header('Content-Type', 'text/plain');
    }
}
