<?php

namespace App\Services;

class TimeService
{
    public function getCurrentTime()
    {
        return date('Y-m-d H:i:s');
    }
}
