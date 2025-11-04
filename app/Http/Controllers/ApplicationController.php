<?php

namespace App\Http\Controllers;

use App\Jobs\SendToBotJob;
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

        dispatch(new SendToBotJob($message));
    }
}
