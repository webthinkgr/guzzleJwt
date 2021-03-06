<?php

declare(strict_types=1);

namespace Webthink\GuzzleJwt\Token\TokenFactory;

use InvalidArgumentException;
use Webthink\GuzzleJwt\Encoder\EncoderInterface;
use Webthink\GuzzleJwt\Token\TimeoutToken;
use Webthink\GuzzleJwt\TokenInterface;

/**
 * @author George Mponos <gmponos@gmail.com>
 */
final class TimeoutTokenFactory implements TokenFactoryInterface
{
    /**
     * @var EncoderInterface
     */
    private $encoder;

    /**
     * @var int
     */
    private $offset;

    /**
     * @param EncoderInterface|null $encoder
     * @param int $offset
     */
    public function __construct(EncoderInterface $encoder = null, int $offset = 0)
    {
        $this->encoder = $encoder;
        $this->offset = $offset;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @param string $token
     * @return TimeoutToken
     * @throws InvalidArgumentException
     */
    public function create(string $token): TokenInterface
    {
        return new TimeoutToken($token, $this->encoder, $this->offset);
    }
}
