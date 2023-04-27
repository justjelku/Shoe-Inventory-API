<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $response = Http::timeout(2)->get('http://127.0.0.1:8000/shoes');
        $products = $response->json();
        

        return view('dashboard', compact('products'));
    }
}
