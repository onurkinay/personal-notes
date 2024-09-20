<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_listinings';
    protected $fillable = ['title', 'salary'];
}


?>