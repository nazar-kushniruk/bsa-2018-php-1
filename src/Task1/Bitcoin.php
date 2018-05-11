<?php
/**
 * Created by PhpStorm.
 * User: new admin
 * Date: 10.05.2018
 * Time: 23:10
 */

namespace Cryptocurrency\Task1;


class Bitcoin implements Currency
{
    private $name;
    private $logoUrl;
    private $dailyPrice;

    public function __construct($dailyPrice)
    {
        $this->name = 'Bitcoin';
        $this->logoUrl = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
        $this->dailyPrice = $dailyPrice;
    }

    public function getName(): string
    {

        return $this->name;
    }

    public function getLogoUrl(): string
    {

        return $this->logoUrl;
    }


    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }
}