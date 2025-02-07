<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\User;

class ReservationsController extends Controller
{
    public function index()
    {
        $destinations = Destination::with('users')->get();
        return view('admin', compact('destinations'));
    }
}
