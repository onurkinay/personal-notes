<?php

use Illuminate\Support\Facades\Route;

class Job {
    public static function all(){   
        return  [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '50000'
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '50200'
            ],
            [
                'id' => '3',
                'title' => 'Teacher',
                'salary' => '51000'
            ]
        ];
    }
}



Route::get('/', function () {
    return view('home', data: [
        'greetings' => 'hello', # $greetings
    ]);
});


Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
  

    $job = Arr::first(Job::all(), function($job) use ($id){
        return $job['id'] == $id;
    });
 

    /*
    
      Arr::first($jobs, fn($job) => $job['id'] == $id );
    
    */

    return view('job',['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
