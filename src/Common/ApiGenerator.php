<?php

namespace Moaj257\TmdbApi\Common;

class ApiGenerator implements ApiGeneratorInterface {
    public $url;
    public $apiUrl;
    public $apiKey;
    public $apiLang;

    public function __construct(string $apiUrl, string $apiKey, string $apiLang) {
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;
        $this->apiLang = $apiLang;
    }

    public function api($path) {
        $this->url = $this->apiUrl . $path . '?api_key=' . $this->apiKey . '&language=' . $this->apiLang;
    }

    public function getUrl() {
        return $this->url;
    }
}