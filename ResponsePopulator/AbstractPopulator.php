<?php

namespace Zeroem\RemoteHttpKernelBundle\ResponsePopulator;

use Symfony\Component\HttpFoundation\Response;

abstract class AbstractPopulator
{
    protected $response;

    public function __construct(Response $response) {
        $this->response = $response;
    }

    abstract function populate();
}