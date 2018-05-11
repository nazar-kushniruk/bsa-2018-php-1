<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{

    private $currencies = array();

    public function addCurrency(Currency $currency): void
    {
        array_push($this->currencies, $currency);
//        $this->currencies[] = $currency;

//
    }

    public function maxPrice(): float
    {
        $price = array();
        foreach ($this->currencies as $currency) {
            array_push($price, $currency->getDailyPrice());
        }
        return max($price);
    }

    /**
 * @return Currency[]
 */
    public function getCurrencies(): array
    {

        return $this->currencies;
    }
}