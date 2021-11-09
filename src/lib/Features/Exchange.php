<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 09/11/2021
 * Time: 20:45
 */

namespace CoinMarketCap\Features;


use CoinMarketCap\Utils\ApiRequest;

class Exchange extends ApiRequest
{
    /**
     * Exchange constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
        self::$apiPath .= 'exchange' . '/';
    }

    /**
     * @param array $params ["listing_status", "slug", "start", "limit", "sort", "aux", "crypto_id"]
     * @return mixed
     * @throws \Exception
     */
    public function map($params = [])
    {
        return $this->get('map', $params);
    }

    /**
     * @param array $params ["id", "slug", "aux"]
     * @return mixed
     * @throws \Exception
     */
    public function info($params = [])
    {
        return $this->get('info', $params);
    }


}