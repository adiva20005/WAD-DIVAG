<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stasiun;

class StasiunController extends Controller
{
    public function index()
    {
        $data = Stasiun::all();
        return view('index', compact('data'));
    }
}
