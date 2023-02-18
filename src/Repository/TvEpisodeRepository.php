<?php

namespace Moaj257\TmdbApi\Repository;

class TvEpisodeRepository extends AbstractRepository {
    public function details($tvId, $seasonNumber, $episodeNumber): self {
        $this->apiGenerator->api('tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber);
        return $this;
    }
}