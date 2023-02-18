<?php

namespace Moaj257\TmdbApi\Factory;

use Moaj257\TmdbApi\Common\ApiGeneratorInterface;

interface ApiFactoryInterface {
    public function getDecorator(string $method, $parameter, ApiGeneratorInterface $ApiGenerator);
}