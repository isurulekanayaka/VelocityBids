<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidController extends Controller
{
    public function addBid()
    {
        return view('bid.add-bid');
    }
}
