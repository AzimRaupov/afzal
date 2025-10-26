<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApplicationController extends Controller
{
    public function add(Request $request)
    {
        $message = "
Имя: {$request->name}
Номер: {$request->phone}
Курс: {$request->course}
";

        $botToken = env('BOT_TOKEN');
        $chatId = env('MANAGER_ID');

        Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        return response()->json(['status' => 'ok']);
    }
}
