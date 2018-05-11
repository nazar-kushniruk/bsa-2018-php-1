<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {

  $resp = '';


        foreach ($market->getCurrencies() as $item){
            $resp .="<img src=\"{$item->getLogoUrl()}\">";
            $resp .= " {$item->getName()} \${$item->getDailyPrice()}<br/><hr/>";

        }

      return $resp;
    }
}