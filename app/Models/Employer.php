<?php
// "php artisan make:model Employer -m"
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    public function jobs(){ // $employer->jobs :: list all jobs belongs to employee
        return $this->hasEntry(Job::class);
    }
}

