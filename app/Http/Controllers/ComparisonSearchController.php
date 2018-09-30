<?php

namespace App\Http\Controllers;

use App\Comparison;
use Illuminate\Http\Request;

class ComparisonSearchController extends Controller
{
    public function index()
    {
        $comparison = Comparison::where('method', 'like', request('q') . '%')->first(['id', 'lang', 'method', 'url']);
        $matches = $comparison ?
            $comparison->matches()->get(['matches.id', 'lang', 'method', 'url']) :
            [];

        return [
            'comparison' => $comparison,
            'matches' => $matches,
        ];
    }
}
