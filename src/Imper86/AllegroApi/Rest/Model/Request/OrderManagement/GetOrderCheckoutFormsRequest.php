<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 16:29
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OrderManagement;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOrderCheckoutFormsRequest implements RequestInterface
{
    /**
     * @var array|null
     */
    private $queryParameters;

    public function __construct(?array $queryParameters = null) {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "order/checkout-forms";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_BETA;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return $this->getQueryParameters();
    }

    /**
     * @return array|null
     */
    public function getQueryParameters(): ?array
    {
        return $this->queryParameters;
    }

    /**
     * @param array|null $queryParameters
     */
    public function setQueryParameters(?array $queryParameters): void
    {
        $this->queryParameters = $queryParameters;
    }
}
