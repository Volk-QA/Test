<?php
include "Classes/convertor.php";

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
$listCurrency = implode(', ', (array_keys($course)));
$curen = new Convertor();
$curen -> convert($course[$currencyFrom], $course[$currencyTo], $sumExchange);
$summary = number_format($res, 2, '.', ',');
echo "За $sumExchange $currencyFrom Вы получите $summary $currencyTo";
echo $curen -> getRates();