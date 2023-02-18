<?php

namespace Moaj257\TmdbApi\Common;

class ApiQueryDecorator extends ApiDecorator {
    public function getUrl() {
        return $this->ApiGenerator->getUrl() .'&query=' . urlencode($this->parameter);
    }
}