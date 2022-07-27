<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GetPortfolioController extends Controller
{
    public function __invoke(Request $request)
    {
        //prueba para desarrollo
        $projects = Project::paginate();

        return view('portfolio', compact('projects'));
    }
   
}