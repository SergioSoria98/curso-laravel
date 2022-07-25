<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GetPortfolioController extends Controller
{
    public function __invoke(Request $request)
    {
        //prueba para desarrollo
        $portfolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
            ['title' => 'Proyecto #5']
        ];

        return view('portfolio', compact('portfolio'));
    }
   
}