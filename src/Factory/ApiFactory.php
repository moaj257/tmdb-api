<?php

namespace Moaj257\TmdbApi\Factory;

use Moaj257\TmdbApi\Common\ApiGeneratorInterface;
use Moaj257\TmdbApi\Common\ApiQueryDecorator;
use Moaj257\TmdbApi\Common\ApiAppendToResponseDeecorator;
use Moaj257\TmdbApi\Exceptions\MethodException;

class ApiFactory implements ApiFactoryInterface {
    public function getDecorator(string $method, $parameter, ApiGeneratorInterface $ApiGenerator) {
        switch($method) {
            case "query":
                return new ApiQueryDecorator($ApiGenerator, ...$parameter);
            case "appendToResponse":
                return new ApiAppendToResponseDecorator($ApiGenerator, ...$parameter);
            default:
                throw new MethodException("Method '{$method}' insn't supported.");
        }
    }
}