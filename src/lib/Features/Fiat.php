<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 09/11/2021
 * Time: 20:39
 */

namespace CoinMarketCap\Features;


use CoinMarketCap\Utils\ApiRequest;

class Fiat extends ApiRequest
{

    /**
     * Cryptocurrency constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
        self::$apiPath .= 'fiat' . '/';
    }

    /**
     * @param array $params ["start", "limit", "sort", "include_metals"]
     * @return mixed
     * @throws \Exception
     */
    public function map($params = [])
    {
        return $this->get('map', $params);
    }

}