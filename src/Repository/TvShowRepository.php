<?php

namespace Moaj257\TmdbApi\Repository;

class TvShowRepository extends AbstractRepository {
    public function details($tvId): self {
        $this->apiGenerator->api('tv/' . $tvId);
        return $this;
    }
}