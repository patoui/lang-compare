<?php

namespace App\Http\Controllers;

use App\Comparison;
use Illuminate\Http\Request;

class ComparisonSuggestionController extends Controller
{
    public function index()
    {
        return Comparison::where('method', 'like', request('q') . '%')
            ->pluck('method');
    }
}
