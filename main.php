<?php

require 'vendor/autoload.php';
include 'finhub-api.php';

$finhubToken = 'btflesv48v6rl6gbml6g'; // your api token in finhub
$finhubBaseURI = 'https://finnhub.io/api/v1/'; // base uri finhub

// getCryptoCandles request symbol BINANCE:BTCUSDT resolution D from 1572651390 to 1575243390
print_r( getCryptoCandles('BINANCE:BTCUSDT','D',1572651390,1575243390) );