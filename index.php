<?php
include "Classes/convertor.php";
$curen = new Convertor();
$listCurrency = $curen -> getCurrencies();
$arrayCurrency = $curen -> getRates();
echo "Список поддерживаемых валют - $listCurrency \n";
$currencyFrom = readline("Из какой валюты: ");
if (!isset($arrayCurrency[$currencyFrom])) {
    echo "Данная валюта не поддерживается: $currencyFrom";
    exit;
}
$currencyTo = readline("В какую валюту: ");
if (!isset($arrayCurrency[$currencyTo])) {
    echo "Данная валюта не поддерживается: $currencyTo";
    exit;
}
$sumExchange = readline("Введите сумму: ");
$sumGet = $curen -> convert($arrayCurrency[$currencyFrom], $arrayCurrency[$currencyTo], $sumExchange);
$sumFormat = number_format($sumGet, 2, '.', ',');
echo "За $sumExchange $currencyFrom Вы получите $sumFormat $currencyTo";