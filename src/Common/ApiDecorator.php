<?php

namespace Moaj257\TmdbApi\Common;

abstract class ApiDecorator implements ApiGeneratorInterface {
    protected $ApiGenerator;
    protected $parameter;

    public function __construct(ApiGeneratorInterface $ApiGenerator, $parameter) {
        $this->ApiGenerator = $ApiGenerator;
        $this->parameter = $parameter;
    }
}