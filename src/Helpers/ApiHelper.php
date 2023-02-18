<?php

namespace Moaj257\TmdbApi\Helpers;

use Illuminate\Support\Facades\Http;

class ApiHelper {
    public static function get($url) {
        dd($url);
        return Http::acceptJson()->get($url);
    }
}