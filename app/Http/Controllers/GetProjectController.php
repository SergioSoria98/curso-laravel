<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
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


    public function show(Project $project){


        return view('projects.show', [
            'project' => $project
        ]);
    }




    public function create(){

        return view('projects.create', [
            'project' => new Project
        ]);
    }


    public function store(SaveProjectRequest $request){
   

       Project::create( $request->validated() );


       return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito');
    }



    public function edit(Project $project){

        return view('projects.edit', [
            'project' => $project
        ]);

    }


    public function update(Project $project, SaveProjectRequest $request){

        $project->update($request->validated());


        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con exito');
    }


    public function destroy (Project $project){

        $project->delete();

        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito');
    }

}