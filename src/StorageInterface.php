<?php

declare(strict_types=1);

namespace Webthink\GuzzleJwt;

/**
 * @author George Mponos <gmponos@gmail.com>
 */
interface StorageInterface
{
    /**
     * This function will store a token.
     *
     * @param TokenInterface $token
     * @return void
     */
    public function storeToken(TokenInterface $token): void;

    /**
     * Returns either the token or null if the token could not be retrieved from the storage.
     *
     * @return TokenInterface|null
     */
    public function getToken(): ?TokenInterface;
}
