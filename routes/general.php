<?php

use Illuminate\Support\Facades\Route;

Route::group(
    ['namespace' => 'General', 'prefix' => config('app.route_prefix')],
    function (): void {
        Route::get('health', 'HealthCheckController@health');
        Route::get('heartbeat', 'HealthCheckController@heartbeat');
        Route::get('version', 'HealthCheckController@version');
    }
);
