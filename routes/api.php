<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '/v1',
    'as' => 'api.v1.',
], base_path('routes/api_v1.php'));

Route::group([
    'prefix' => '/v2',
    'as' => 'api.v2.',
], base_path('routes/api_v2.php'));
