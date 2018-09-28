<?php

namespace App\Http\Controllers;

use App\Comparison;
use Illuminate\Http\Request;

class ComparisonSearchController extends Controller
{
    public function index()
    {
        return Comparison::where('method', 'like', request('q') . '%')->first()
            ->matches()
            ->get(['lang', 'method']);
    }
}
