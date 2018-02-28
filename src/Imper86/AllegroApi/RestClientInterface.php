<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:20
 */

namespace Imper86\AllegroApi;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Psr\Http\Message\ResponseInterface;

interface RestClientInterface
{
    public function getAuthService(): AuthServiceInterface;

    public function get(TokenInterface $token, RequestInterface $request): ResponseInterface;

    public function post(TokenInterface $token, RequestInterface $request): ResponseInterface;

    public function put(TokenInterface $token, RequestInterface $request): ResponseInterface;

    public function delete(TokenInterface $token, RequestInterface $request): ResponseInterface;
}