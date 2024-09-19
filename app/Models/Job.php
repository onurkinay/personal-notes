<?php
namespace App\Models;

class Job
{
    public static function all()
    {
        return [
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

    public static function find(int $id):array
    {

       $job =  \Illuminate\Support\Arr::first(static::all(), function ($job) use ($id) {
            return $job['id'] == $id;
        }); 
        /*
        
          Arr::first($jobs, fn($job) => $job['id'] == $id );
        
        */

        if(!$job){
            abort(404);
        }
        return $job;

    }
}



?>