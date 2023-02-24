<?php
$course = [
    "usd" => 74.77,
    "eur" => 80,
    "jpy" => 0.55,
    "rub" => 1,
    "cny" => 10.5
];
$listCurrency = implode(', ', (array_keys($course)));
echo "Список поддерживаемых валют - $listCurrency \n";
$currencyFrom = readline("Из какой валюты: ");
if (!isset($course[$currencyFrom])) {
    echo "Данная валюта не поддерживается: $currencyFrom";
    exit;
}
$currencyTo = readline("В какую валюту: ");
if (!isset($course[$currencyTo])) {
    echo "Данная валюта не поддерживается: $currencyTo";
    exit;
}
$sumExchange = readline("Введите сумму: ");
$formula = $course[$currencyFrom] / $course[$currencyTo] * $sumExchange;
$res = number_format($formula, 2, '.', ',');
echo "За $sumExchange $currencyFrom Вы получите $res $currencyTo";
echo "HUI";