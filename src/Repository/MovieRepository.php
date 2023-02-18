<?php

namespace Moaj257\TmdbApi\Repository;

class MovieRepository extends AbstractRepository {
    public function details($movieId): self {
        $this->apiGenerator->api('movie/' . $movieId);
    }
}