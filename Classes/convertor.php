<?php
class Convertor
{
    private $rate = [
        "usd" => 74.77,
        "eur" => 80,
        "jpy" => 0.55,
        "rub" => 1,
        "cny" => 10.5
    ];
    public function getRates()
    {
        return $this->rate;
    }
    public function getCurrencies()
    {
        return implode(', ', (array_keys($this->rate)));
    }
    public function convert($from, $to, $amount)
    {
        $calc = $from / $to * $amount;
        return $calc;
    }
}