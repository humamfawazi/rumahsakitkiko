<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    protected function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}