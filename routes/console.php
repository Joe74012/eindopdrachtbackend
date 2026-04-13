<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('joe', function () {
    $this->comment( 'GIVE IT TO ME JOE!');
})->purpose('test');
