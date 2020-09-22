<?php

// http request client library
use GuzzleHttp\Client;

// getCryptoCandles - Get candlestick data for crypto symbols
// ----------------------------------------------------------
// params : 
// symbol REQUIRED - exchange + Currency pairs Ex : BINANCE:BTCUSDT
// resolution REQUIRED - Supported resolution includes 1, 5, 15, 30, 60, D, W, M .Some timeframes might not be available depending on the exchange.
// from REQUIRED - UNIX timestamp. Interval initial value.
// to REQUIRED - UNIX timestamp. Interval end value.
// -----------------------------------------------------------
// json response Attributes :
// o - List of open prices for returned candles.
// h - List of high prices for returned candles.
// l - List of low prices for returned candles.
// c - List of close prices for returned candles. 
// v - List of volume data for returned candles.
// t - List of timestamp for returned candles.
// s - Status of the response. This field can either be ok or no_data.
function getCryptoCandles(string $symbol,string $resolutian,int $from,int $to){

    $client = new Client([
        'base_uri' => $GLOBALS['finhubBaseURI'],
    ]);

    $response = $client->get('crypto/candle?symbol=' . $symbol . '&resolution=' . $resolutian . '&from=' . $from . '&to=' . $to . '&token=' . $GLOBALS['finhubToken']);

    $body = $response->getBody();
    return json_decode((string) $body);
}