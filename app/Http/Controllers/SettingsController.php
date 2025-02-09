<?php

namespace App\Http\Controllers;

use App\Models\Retailer;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $retailers = Retailer::all();
        return view('settings', ['retailers' => $retailers]);
    }
}
