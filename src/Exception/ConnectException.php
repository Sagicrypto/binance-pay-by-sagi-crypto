<?php

declare(strict_types=1);

namespace GSMBinancePay\WC\Exception;

class ConnectException extends BinancePayException
{
    public function __construct(string $curlErrorMessage, int $curlErrorCode)
    {
        parent::__construct($curlErrorMessage, $curlErrorCode);
    }
}
