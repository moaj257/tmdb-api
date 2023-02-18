<?php

namespace Moaj257\TmdbApi\Repository;

class SearchRepository extends AbstractRepository {
    public function movies(): self {
        $this->apiGenerator->api('search/movie');
        return $this;
    }

    public function tvShows(): self {
        $this->apiGenerator->api('search/tv');
        return $this;
    }
}