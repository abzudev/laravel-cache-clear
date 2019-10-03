<?php

Route::match(['post', 'get'], '/cc', ['uses' => 'Abzudev\LaravelCacheClear\Controllers\CacheController@clear']);
