<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index()
    {
        $links = Link::orderBy('created_at', 'desc')->paginate(10);

        return view('links.index', ['links' => $links]);
    }
}
