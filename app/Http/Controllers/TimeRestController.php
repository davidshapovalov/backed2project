<?php

namespace App\Http\Controllers;

use App\Services\TimeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TimeRestController extends Controller
{
    protected TimeService $timeService;

    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }

    public function index()
    {
        return response()->json([
            'current_time' => $this->timeService->getCurrentTime()
        ], Response::HTTP_OK);
    }
}
