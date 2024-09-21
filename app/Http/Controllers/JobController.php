<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(5); //pagintation
        //$jobs = Job::with('employer')->simplePaginate(5);
        //$jobs = Job::with('employer')->cursorPaginate(5); // hashed link instead of number page
    
        return view('jobs.index', [
            'jobs' => $jobs
        ]);   
    }
    public function create(){
        return view('jobs.create');
    }

    public function store(Request $request)
    {
         //dd(request()->all()); // request('title')

    request()->validate([   
        'title'=> ['required', 'min:3'],
        'salary'=> ['required'],

    ]);
    Job::create([
        'title' => request('title'),
        'salary'=> request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
    }

    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show',['job' => $job]);
    
    }
    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit',['job' => $job]);
    
    }
    public function update($id)
    {
        request()->validate([   
            'title'=> ['required', 'min:3'],
            'salary'=> ['required'],
    
        ]);
    
        $job = Job::findOrFail($id);
    
        $job->title = request('title');
        $job->salary = request('salary');
        $job->save(); 
    
        /* 
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
        */
    
        return redirect('/jobs/'.$job->id);
    
    }
    public function destroy($id)
    {
        $job = Job::findOrFail($id)->delete();
        return redirect('/jobs');
    }

}
