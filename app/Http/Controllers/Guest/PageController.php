<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function welcome() {
        $trains = Train::all();
        return view('welcome', [
            'trains' => $trains,
        ]);
    }
}
