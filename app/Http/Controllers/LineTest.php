<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use Line;

class LineTest extends Controller
{
    public function pushText()
    {
        // $httpClient = new CurlHTTPClient('WPRGRq3bT3jy5rgQxfCP8u4rJEpN2onuTPoqjZ9gIG9+Y+5bLZsujB51ziGqXDgZaZ/KUNJPUkrUnyRMT/jGw2/vua4MuuqTULhIDYFZRaJziJncvl7wZwyx96pNs2rzg0lAoNIGeLNirk/N6W4EhAdB04t89/1O/w1cDnyilFU=');
        // $bot = new LINEBot($httpClient, ['channelSecret' => '1682b2cf2d6ae64900e7ebea1ab35392']);

        // $message = new TextMessageBuilder('Im your bot');

        $pin = Line::pushText('Ub102631bd6a2f2b7e5b10f8aa5235770', 'kuy');
    }
}
