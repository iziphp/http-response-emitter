<?php

declare(strict_types=1);

namespace PhpStandard\Http\ResponseEmitter;

use PhpStandard\Http\ResponseEmitter\Exceptions\HeadersAlreadySentExceptionInterface;
use PhpStandard\Http\ResponseEmitter\Exceptions\PreviousOutputExceptionInterface;
use Psr\Http\Message\ResponseInterface;

/** @package PhpStandard\Http\ResponseEmitter */
interface EmitterInterface
{
    /**
     * Emit a response.
     *
     * Emits a response, including status line, headers, and the message body,
     * according to the environment.
     *
     * Implementations of this method may be written in such a way as to have
     * side effects, such as usage of header() or pushing output to the
     * output buffer.
     *
     * Implementations MAY raise exceptions if they are unable to emit the
     * response; e.g., if headers have already been sent.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return void
     * @throws HeadersAlreadySentExceptionInterface
     * @throws PreviousOutputExceptionInterface
     */
    public function emit(ResponseInterface $response): void;
}
