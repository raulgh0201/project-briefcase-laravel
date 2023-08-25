<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();  
        $projects = Project::all();

        return view('project.projects', compact('projects','user'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::user(); 
        $project = Project::find($id);
        $appName = env('MAIL_PASSWORD'); 
        
        if(!$project){
            return redirect('projects')->with('error','No project found');
        }
        
        return view('project.project', compact('project','user','appName'));
    }

}
