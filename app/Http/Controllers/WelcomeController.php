<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function client()
    {
        $clients = Client::all();

        return view('welcome', ['clients' => $clients]);
    }
}
