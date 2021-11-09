<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 09/11/2021
 * Time: 20:59
 */

namespace CoinMarketCap\Features;


use CoinMarketCap\Utils\ApiRequest;

class Key  extends ApiRequest
{
    /**
     * Key constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
        self::$apiPath .= 'key' . '/';
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function info()
    {
        return $this->get('info');
    }

}