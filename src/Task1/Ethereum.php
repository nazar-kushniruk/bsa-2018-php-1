<?php
/**
 * Created by PhpStorm.
 * User: new admin
 * Date: 11.05.2018
 * Time: 0:02
 */

namespace Cryptocurrency\Task1;


class Ethereum implements Currency
{
    private $name;
    private $logoUrl;
    private $dailyPrice;

    public function __construct($dailyPrice)
    {  $this->name = 'Ethereum';
        $this->logoUrl = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png';
        $this ->dailyPrice = $dailyPrice;
    }

    public function getName(): string
    {

        return $this->name ;
    }

    public function getLogoUrl(): string
    {

        return $this->logoUrl;
    }


    public function getDailyPrice():float
    {
        return $this->dailyPrice;
    }
}
