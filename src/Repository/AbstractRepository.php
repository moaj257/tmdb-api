<?php

namespace Moaj257\TmdbApi\Repository;

use Moaj257\TmdbApi\Common\ApiGenerator;
use Moaj257\TmdbApi\Factory\ApiFactory;
use Moaj257\TmdbApi\Helpers\ApiHelper;

abstract class AbstractRepository {
    protected $apiGenerator;
    protected $apiDecorator = false;
    protected $appendToResponse;

    public function __construct(ApiGenerator $apiGenerator) {
        $this->apiGenerator = $apiGenerator;
    }

    public function __call($method, $args): self {
        $this->apiDecorator = (new ApiFactory())->getDecorator($method, $args, $this->apiGenerator);
        return $this;
    }

    public function get(): array {
        if($this->apiDecorator) {
            $url = $this->apiDecorator->getUrl();
            $this->apiDecorator = false;
            return $this->response($url);
        }
        return $this->response($this->apiGenerator->getUrl());
    }

    protected function response($url): array {
        return json_decode(ApiHelper::get($url), true);
    }
}