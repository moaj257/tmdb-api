<?php

namespace Moaj257\TmdbApi\Repository;

class TvSeasonRepository extends AbstractRepository {
    public function details($tvId, $seasonNumber): self {
        $this->apiGenerator->api('tv/' . $tvId . '/season/' . $seasonNumber);
        return $this;
    }
}