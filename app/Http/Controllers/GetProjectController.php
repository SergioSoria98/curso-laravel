<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GetProjectController extends Controller
{
    public function __invoke(Request $request)
    {
        //prueba para desarrollo
     

     
    }
    public function index(){
        return view('projects.index', [
            'projects' => Project::paginate()
        ]);
      
    }


    public function show($id){

        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }
}