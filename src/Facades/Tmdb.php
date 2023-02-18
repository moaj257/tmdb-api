<?php

namespace Moaj257\TmdbApi\Facades;

use Illuminate\Support\Facades\Facade;
use Moaj257\TmdbApi\TmdbApi;

class Tmdb extends Facade {
    protected static function getFacadeAccessor() {
        return TmdbApi::class;
    }
}