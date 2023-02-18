<?php

namespace Moaj257\TmdbApi\Common;

class ApiAppendToResponseDecorator extends ApiDecorator {
    public function getUrl() {
        return $this->ApiGenerator->getUrl() .'&append_to_response=' . implode(',', $this->parameter);
    }
}