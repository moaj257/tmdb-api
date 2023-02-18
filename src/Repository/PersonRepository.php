<?php

namespace Moaj257\TmdbApi\Repository;

class PersonRepository extends AbstractRepository {
    public function details($personId): self {
        $this->apiGenerator->api('person/' . $personId);
        return $this;
    }
}