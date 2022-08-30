<?php

namespace Kangangga\Pcare;

use Illuminate\Contracts\Foundation\Application;

class Pcare
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function api()
    {
        return $this;
    }
}
