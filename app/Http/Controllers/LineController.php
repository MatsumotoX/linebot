<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Line;


class LineController extends Controller
{
    private $id;

    public function __construct()
    {
        $this->id = 'Ub102631bd6a2f2b7e5b10f8aa5235770';
    }

    public function getIndex()
    {
        return view('welcome');
    }

    public function sendText(Request $request)
    {

        $send = Line::pushText('Ub102631bd6a2f2b7e5b10f8aa5235770', $request->message);
    }

    public function sendPrice(Request $request)
    {

        $json = file_get_contents('https://api.binance.com/api/v1/depth?symbol=' . $request->symbol . 'USDT');
        $orderbook = json_decode($json);

        $bid = $orderbook->bids[0][0];
        $ask = $orderbook->asks[0][0];

        // dd($bid, $ask); //ใช้สำหรับ test

        $message = "Coin: " . $request->symbol . "\r\nBid: " . $bid . "\r\nAsk: " . $ask;

        $line = Line::pushText($this->id, $message);

        return redirect()->route('line.index');


    }
}
