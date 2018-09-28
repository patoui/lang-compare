<?php

namespace App\Http\Controllers;

use App\Comparison;
use Illuminate\Http\Request;

class ComparisonSearchController extends Controller
{
    public function index()
    {
        $parent = Comparison::where('method', 'like', request('q') . '%')->first();

        return $parent ?
            $parent->matches()->get(['matches.id', 'lang', 'method']) :
            [];
    }
}
