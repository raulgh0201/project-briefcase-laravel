<?php

namespace App\Http\Controllers\admin;

use App\Models\Project;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // dd($request);
            $request->validate([
                'name' => 'required|min:6',
                'description' => 'required',
                'category' => 'required',
                'year' => 'integer|nullable',
                'lang' => 'required',
            ]);
               

            $project = new Project;
    
            $project->name = $request->name;
            $project->description = $request->description;
            $project->category = $request->category;
            $project->year = $request->year;
            $project->lang = $request->lang;
            $project->image = $request->image;
            $project->githubUrl = $request->githubUrl;
            $project->webUrl = $request->webUrl;

            if ($request->hasFile('image')) {
                try {
                    $file = $request->file('image');
                    $fileName = $file->getClientOriginalName();
                    $file->move('img/projectImgs', $fileName);
                    $project->image = $fileName;
                    echo $fileName;
                } catch (\Exception $e) {
                    echo "Error uploading file: " . $e->getMessage();
                }
            }
            
    
    
            $project->save();
    
            return redirect()->route('createProject')
                ->with('projectId', $project->id)  
                ->with('success','Proyect Created Succesfully');   
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
        
        return view('admin.project.project', compact('project','user','appName'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::user(); 
        $project = Project::find($id);
        
        if(!$project){
            return redirect('projects')->with('error','No project found');
        }
        
        return view('admin.project.edit', compact('project','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $projectId)
    {
        $request->validate([
            'name' => 'required|min:6',
            'description' => 'required',
            'category' => 'required',
            'year' => 'integer|nullable',
            'lang' => 'required',
        ]);

        $project = Project::find($projectId);

           
        $project->name = $request->name;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->year = $request->year;
        $project->lang = $request->lang;
        $project->image = $request->image;
        $project->githubUrl = $request->githubUrl;
        $project->webUrl = $request->webUrl;

        if ($request->hasFile('image')) {
            try {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $file->move('img/projectImgs', $fileName);
                $project->image = $fileName;
                echo $fileName;
            } catch (\Exception $e) {
                echo "Error uploading file: " . $e->getMessage();
            }
        }
        
        $project->save();

        return redirect()->route('showProjects')->with('success','Proyect Updated Succesfully');   ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Auth::user(); 
        
        if(Project::where('id', $id)->delete()){
            return redirect()->route('showProjects')->with('success','Project deleted succesfully');
        }else{
            return redirect('showProject/' . $id)->with('error','Error deleting project');
        }
        
    }
}
